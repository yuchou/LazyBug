<?php
class Const_Code {
	// 基本状态码
	const SUCCESS = '000000';
	const FAIL = '000001';
	const ERROR = '000002';
	const AUTH = '000003';
	
	// 登录状态码
	const LOGIN_FAIL = '100001';
	const LOGIN_PARAM_ERROR = '100021';
	
	// 模块状态码
	const ADD_MODULE_FAIL = '200001';
	const UPDATE_MODULE_FAIL = '200002';
	const DELETE_MODULE_FAIL = '200003';
	const ADD_MODULE_EXISTS = '200011';
	const UPDATE_MODULE_EXISTS = '200012';
	const MODULE_PARAM_ERROR = '200021';
	
	// 接口状态码
	const ADD_ITEM_FAIL = '300001';
	const UPDATE_ITEM_FAIL = '300002';
	const DELETE_ITEM_FAIL = '300003';
	const ADD_ITEM_EXISTS = '300011';
	const UPDATE_ITEM_EXISTS = '300012';
	const ITEM_PARAM_ERROR = '300021';
	
	// 用例状态码
	const ADD_CASE_FAIL = '400001';
	const UPDATE_CASE_FAIL = '400002';
	const DELETE_CASE_FAIL = '400003';
	const ADD_CASE_EXISTS = '400011';
	const UPDATE_CASE_EXISTS = '400012';
	const CASE_PARAM_ERROR = '400021';
	
	// 步骤状态码
	const ADD_STEP_FAIL = '500001';
	const DELETE_STEP_FAIL = '500002';
	const STEP_PARAM_ERROR = '500021';
	
	// 配置包状态码
	const ADD_PACKAGE_FAIL = '600001';
	const UPDATE_PACKAGE_FAIL = '600002';
	const DELETE_PACKAGE_FAIL = '600003';
	const ADD_PACKAGE_EXISTS = '600011';
	const UPDATE_PACKAGE_EXISTS = '600012';
	const PACKAGE_PARAM_ERROR = '600021';
	
	// 配置状态码
	const ADD_CONFIG_FAIL = '700001';
	const UPDATE_CONFIG_FAIL = '700002';
	const DELETE_CONFIG_FAIL = '700003';
	const ADD_CONFIG_EXISTS = '700011';
	const UPDATE_CONFIG_EXISTS = '700012';
	const CONFIG_PARAM_ERROR = '700021';
	const CONFIG_FORMAT_ERROR = '700022';
	
	// 任务状态码
	const ADD_TASK_FAIL = '800001';
	const UPDATE_TASK_FAIL = '800002';
	const DELETE_TASK_FAIL = '800003';
	const ADD_TASK_EXISTS = '800011';
	const UPDATE_TASK_EXISTS = '800012';
	const TASK_PARAM_ERROR = '800021';
	
	// 作业状态码
	const ADD_JOB_FAIL = '900001';
	const UPDATE_JOB_FAIL = '900002';
	const DELETE_JOB_FAIL = '900003';
	const ADD_JOB_EXISTS = '900011';
	const UPDATE_JOB_EXISTS = '900012';
	const JOB_PARAM_ERROR = '900021';
	
	// 用户状态码
	const ADD_USER_FAIL = '990001';
	const UPDATE_USER_FAIL = '990002';
	const DELETE_USER_FAIL = '990003';
	const ADD_USER_EXISTS = '990011';
	const UPDATE_USER_EXISTS = '990012';
	const USER_PARAM_ERROR = '990021';
	const USER_FORMAT_ERROR = '990022';
	const USER_CHECK_ERROR = '990023';
	
	// 系统状态码
	const UPDATE_SYSTEM_FAIL = 'XS0001';
	const SYSTEM_PARAM_ERROR = 'XS0021';
}