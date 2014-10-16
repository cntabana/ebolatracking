<?php

Yii::import('application.models._base.BaseRequest');

class Request extends BaseRequest
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}