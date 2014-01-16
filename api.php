<?php

	$username = isset($_POST['username']) ? $_POST['username'] : 0;
	if(!empty($username)) {

		require_once "Zend/Gdata/YouTube.php";
		Zend_Loader::loadClass('Zend_Gdata_Youtube');  
		$yt = new Zend_Gdata_Youtube();
		$yt->setMajorProtocolVersion(2);

		try
		{
			$userProfile = $yt->getUserProfile($username);
			$statistics = $userProfile->getStatistics();
			// ---- la fonction totalUploadViews() n'existe pas, on va donc directement reprendre les elements dans le XML
			$xdoc = new DomDocument;
			$xdoc->Load('http://gdata.youtube.com/feeds/api/users/'.$username.'');
			$ytstat = $xdoc->getElementsByTagName('statistics')->item(0);
			$total_views_yt = $ytstat->getAttribute('totalUploadViews');
			$abo = $statistics->getSubscriberCount();

			$userStats = array('total_views_yt' => $total_views_yt, 'abo' => $abo );
			echo json_encode($userStats);
			
		} catch (Zend_Gdata_App_HttpException $e) {
			echo "error";
		} catch (Zend_Uri_Exception $e) {
			echo "error";
		} catch (Zend_Gdata_App_Exception $e) {
			echo "error";
		}
	}