<?php
namespace muhsamsul\alert;
use Yii;

class Alert extends \yii\bootstrap\Widget
{
	public function init()
	{
		parent::init();
		if (Yii::$app->session->hasFlash('success')) {
			echo '<div class="alert alert-success">';
			echo Yii::$app->session->getFlash('success');
			echo "</div>";
		} else if (Yii::$app->session->hasFlash('error')){
			echo '<div class="alert alert-error">';
			echo Yii::$app->session->getFlash('error');
			echo "</div>";
		} else if (Yii::$app->session->hasFlash('warning')){
			echo '<div class="alert alert-warning">';
			echo Yii::$app->session->getFlash('warning');
			echo "</div>";
		}
		// echo "<pre>";
		// print_r(Yii::$app->session->getFlash('aa'));
		// echo "</pre>";
		
	}
}