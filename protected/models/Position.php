<?php

Yii::import('application.models._base.BasePosition');

class Position extends BasePosition
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}