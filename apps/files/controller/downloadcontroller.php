<?php
/**
 * @author Björn Schießle <schiessle@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */


namespace OCA\Files\Controller;


use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IL10N;
use OCP\IRequest;

class DownloadController extends Controller {

	/** @var IL10N */
	private $l;

	/**
	 * @param string $appName
	 * @param IRequest $request
	 * @param IL10N $IL10N
	 */
	public function __construct($appName,
								IRequest $request,
								IL10N $IL10N){

		$this->l = $IL10N;

		parent::__construct($appName, $request);
	}

	/**
	 * render error page
	 *
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 * 
	 * @param string $errorMessage
	 * @return TemplateResponse
	 */
	public function failed($errorMessage = '') {
		if (empty($errorMessage)) {
			$this->l->t('Unknown error, please contact your Administrator');
		}

		return new TemplateResponse(
			'files',
			'failure',
			['errorMessage' => $errorMessage],
			'guest'
		);
	}

}
