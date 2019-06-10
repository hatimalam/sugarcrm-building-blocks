<?php

require_once('include/Expressions/Expression/Boolean/BooleanExpression.php');

/**
 * <b>isAdmin()</b><br>
 * Returns true if current user is System Admin.<br/>
 * ex: <i>isAdmin()</i> = true
 */
class isAdminExpression extends BooleanExpression
{
    function evaluate() {
        global $current_user;
        if($current_user->isAdmin()) {
            return AbstractExpression::$TRUE;
        } else {
            return AbstractExpression::$FALSE;
        }
    }

    static function getJSEvaluate() {
		return <<<EOQ
            var SEE = SUGAR.expressions.Expression,
                isAdmin = (SUGAR.App.user.get('type') == 'admin');
            if(isAdmin) {
                return SEE.TRUE;
            }
            return SEE.FALSE;
EOQ;
	}

    /**
	 * Returns the operation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "isAdmin";
	}

	/**
	 * Returns the maximum number of parameters needed.
	 */
	static function getParamCount() {
		return 0;
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {}
}