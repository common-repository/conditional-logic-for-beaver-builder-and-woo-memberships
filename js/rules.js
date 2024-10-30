var addRuleType = BBLogic.api.addRuleType
var __ = BBLogic.i18n.__

addRuleType( 'bb-logic-digital-member/membership-active', {
    label: __( 'User Membership' ),
    category: 'user',
    form: function( props ) {
    var operator = props.rule.operator
    return {
      key: {
      	type: 'select',
			  route: 'bb-logic/v1/wordpress/posts?post_type=wc_membership_plan',
      },
			operator: {
        type: 'operator',
        operators: [
          'is_set',
          'is_not_set',
          'equals',
          'does_not_equal',
        ],
      },
      compare: {
				type: 'select',
				options: [
				    {
				      label: 'Active',
				       value: 'active',
				    },
				    {
				      label: 'Free Trial',
				       value: 'free_trial',
				    },
				    {
				      label: 'Complimentary',
				      value: 'complimentary',
				    },
				    {
				      label: 'Pending Cancellation',
				       value: 'pending',
				    },
				    {
				      label: 'Paused',
				      value: 'paused',
				    },
				    {
				      label: 'Expired',
				       value: 'expired',
				    },
				    {
				      label: 'Cancelled',
				      value: 'cancelled',
				    },
				    {
				      label: 'Delayed',
				      value: 'delayed',
				    },
				    {
				      label: 'Never Active',
				      value: 'inactive', // custom to this plugin
				    },
				  ],
  			//route: 'bb-logic/v1/wordpress/post-stati?post_type=wc_user_membership',
        visible: 'is_set' !== operator && 'is_not_set' !== operator,
      },
    }
  },
} );

