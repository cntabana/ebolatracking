<?php

Yii::import('application.models._base.BaseResponse');

class Response extends BaseResponse
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}