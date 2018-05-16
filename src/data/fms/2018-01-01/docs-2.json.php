<?php
// This file was auto-generated from sdk-root/src/data/fms/2018-01-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS Firewall Manager</fullname> <p>This is the <i>AWS Firewall Manager API Reference</i>. This guide is for developers who need detailed information about the AWS Firewall Manager API actions, data types, and errors. For detailed information about AWS Firewall Manager features, see the <a href="http://docs.aws.amazon.com/waf/latest/developerguide/fms-chapter.html">AWS Firewall Manager Developer Guide</a>.</p>', 'operations' => [ 'AssociateAdminAccount' => '<p>Sets the AWS Firewall Manager administrator account. AWS Firewall Manager must be associated with a master account in AWS Organizations or associated with a member account that has the appropriate permissions. If the account ID that you submit is not an AWS Organizations master account, AWS Firewall Manager will set the appropriate permissions for the given member account.</p> <p>The account that you associate with AWS Firewall Manager is called the AWS Firewall manager administrator account. </p>', 'DeleteNotificationChannel' => '<p>Deletes an AWS Firewall Manager association with the IAM role and the Amazon Simple Notification Service (SNS) topic that is used to record AWS Firewall Manager SNS logs.</p>', 'DeletePolicy' => '<p>Permanently deletes an AWS Firewall Manager policy. </p>', 'DisassociateAdminAccount' => '<p>Disassociates the account that has been set as the AWS Firewall Manager administrator account. You will need to submit an <code>AssociateAdminAccount</code> request to set a new account as the AWS Firewall administrator.</p>', 'GetAdminAccount' => '<p>Returns the AWS Organizations master account that is associated with AWS Firewall Manager as the AWS Firewall Manager administrator.</p>', 'GetComplianceDetail' => '<p>Returns detailed compliance information about the specified member account. Details include resources that are in and out of compliance with the specified policy. Resources are considered non-compliant if the specified policy has not been applied to them.</p>', 'GetNotificationChannel' => '<p>Returns information about the Amazon Simple Notification Service (SNS) topic that is used to record AWS Firewall Manager SNS logs.</p>', 'GetPolicy' => '<p>Returns information about the specified AWS Firewall Manager policy.</p>', 'ListComplianceStatus' => '<p>Returns an array of <code>PolicyComplianceStatus</code> objects in the response. Use <code>PolicyComplianceStatus</code> to get a summary of which member accounts are protected by the specified policy. </p>', 'ListPolicies' => '<p>Returns an array of <code>PolicySummary</code> objects in the response.</p>', 'PutNotificationChannel' => '<p>Designates the IAM role and Amazon Simple Notification Service (SNS) topic that AWS Firewall Manager uses to record SNS logs.</p>', 'PutPolicy' => '<p>Creates an AWS Firewall Manager policy.</p>', ], 'shapes' => [ 'AWSAccountId' => [ 'base' => NULL, 'refs' => [ 'AssociateAdminAccountRequest$AdminAccount' => '<p>The AWS account ID to associate with AWS Firewall Manager as the AWS Firewall Manager administrator account. This can be an AWS Organizations master account or a member account. For more information about AWS Organizations and master accounts, see <a href="https://docs.aws.amazon.com/organizations/latest/userguide/orgs_manage_accounts.html">Managing the AWS Accounts in Your Organization</a>.</p>', 'GetAdminAccountResponse$AdminAccount' => '<p>The AWS account that is set as the AWS Firewall Manager administrator.</p>', 'GetComplianceDetailRequest$MemberAccount' => '<p>The AWS account that owns the resources that you want to get the details for.</p>', 'PolicyComplianceDetail$PolicyOwner' => '<p>The AWS account that created the AWS Firewall Manager policy.</p>', 'PolicyComplianceDetail$MemberAccount' => '<p>The AWS account ID.</p>', 'PolicyComplianceStatus$PolicyOwner' => '<p>The AWS account that created the AWS Firewall Manager policy.</p>', 'PolicyComplianceStatus$MemberAccount' => '<p>The member account ID.</p>', ], ], 'AssociateAdminAccountRequest' => [ 'base' => NULL, 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'EvaluationResult$EvaluationLimitExceeded' => '<p>Indicates that over 100 resources are non-compliant with the AWS Firewall Manager policy.</p>', 'Policy$ExcludeResourceTags' => '<p>If set to <code>True</code>, resources with the tags that are specified in the <code>ResourceTag</code> array are not protected by the policy. If set to <code>False</code>, and the <code>ResourceTag</code> array is not null, only resources with the specified tags are associated with the policy.</p>', 'Policy$RemediationEnabled' => '<p>Indicates if the policy should be automatically applied to new resources.</p>', 'PolicyComplianceDetail$EvaluationLimitExceeded' => '<p>Indicates if over 100 resources are non-compliant with the AWS Firewall Manager policy.</p>', 'PolicySummary$RemediationEnabled' => '<p>Indicates if the policy should be automatically applied to new resources.</p>', ], ], 'ComplianceViolator' => [ 'base' => '<p>Details of the resource that is not protected by the policy.</p>', 'refs' => [ 'ComplianceViolators$member' => NULL, ], ], 'ComplianceViolators' => [ 'base' => NULL, 'refs' => [ 'PolicyComplianceDetail$Violators' => '<p>An array of resources that are not protected by the policy.</p>', ], ], 'DeleteNotificationChannelRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeletePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateAdminAccountRequest' => [ 'base' => NULL, 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'InternalErrorException$Message' => NULL, 'InvalidInputException$Message' => NULL, 'InvalidOperationException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, ], ], 'EvaluationResult' => [ 'base' => '<p>Describes the compliance status for the account. An account is considered non-compliant if it includes resources that are not protected by the specified policy.</p>', 'refs' => [ 'EvaluationResults$member' => NULL, ], ], 'EvaluationResults' => [ 'base' => NULL, 'refs' => [ 'PolicyComplianceStatus$EvaluationResults' => '<p>An array of <code>EvaluationResult</code> objects.</p>', ], ], 'GetAdminAccountRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetAdminAccountResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetComplianceDetailRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetComplianceDetailResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetNotificationChannelRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetNotificationChannelResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'InternalErrorException' => [ 'base' => '<p>The operation failed because of a system problem, even though the request was valid. Retry your request.</p>', 'refs' => [], ], 'InvalidInputException' => [ 'base' => '<p>The parameters of the request were invalid.</p>', 'refs' => [], ], 'InvalidOperationException' => [ 'base' => '<p>The operation failed because there was nothing to do. For example, you might have submitted an <code>AssociateAdminAccount</code> request, but the account ID that you submitted was already set as the AWS Firewall Manager administrator.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>The operation exceeds a resource limit, for example, the maximum number of <code>policy</code> objects that you can create for an AWS account. For more information, see <a href="http://docs.aws.amazon.com/waf/latest/developerguide/fms-limits.html">Firewall Manager Limits</a> in the <i>AWS WAF Developer Guide</i>.</p>', 'refs' => [], ], 'ListComplianceStatusRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListComplianceStatusResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListPoliciesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListPoliciesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ManagedServiceData' => [ 'base' => NULL, 'refs' => [ 'SecurityServicePolicyData$ManagedServiceData' => '<p>Details about the service. This contains <code>WAF</code> data in JSON format, as shown in the following example:</p> <p> <code>ManagedServiceData": "{\\"type\\": \\"WAF\\", \\"ruleGroups\\": [{\\"id\\": \\"12345678-1bcd-9012-efga-0987654321ab\\", \\"overrideAction\\" : {\\"type\\": \\"COUNT\\"}}], \\"defaultAction\\": {\\"type\\": \\"BLOCK\\"}}</code> </p>', ], ], 'PaginationMaxResults' => [ 'base' => NULL, 'refs' => [ 'ListComplianceStatusRequest$MaxResults' => '<p>Specifies the number of <code>PolicyComplianceStatus</code> objects that you want AWS Firewall Manager to return for this request. If you have more <code>PolicyComplianceStatus</code> objects than the number that you specify for <code>MaxResults</code>, the response includes a <code>NextToken</code> value that you can use to get another batch of <code>PolicyComplianceStatus</code> objects.</p>', 'ListPoliciesRequest$MaxResults' => '<p>Specifies the number of <code>PolicySummary</code> objects that you want AWS Firewall Manager to return for this request. If you have more <code>PolicySummary</code> objects than the number that you specify for <code>MaxResults</code>, the response includes a <code>NextToken</code> value that you can use to get another batch of <code>PolicySummary</code> objects.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'ListComplianceStatusRequest$NextToken' => '<p>If you specify a value for <code>MaxResults</code> and you have more <code>PolicyComplianceStatus</code> objects than the number that you specify for <code>MaxResults</code>, AWS Firewall Manager returns a <code>NextToken</code> value in the response that allows you to list another group of <code>PolicyComplianceStatus</code> objects. For the second and subsequent <code>ListComplianceStatus</code> requests, specify the value of <code>NextToken</code> from the previous response to get information about another batch of <code>PolicyComplianceStatus</code> objects.</p>', 'ListComplianceStatusResponse$NextToken' => '<p>If you have more <code>PolicyComplianceStatus</code> objects than the number that you specified for <code>MaxResults</code> in the request, the response includes a <code>NextToken</code> value. To list more <code>PolicyComplianceStatus</code> objects, submit another <code>ListComplianceStatus</code> request, and specify the <code>NextToken</code> value from the response in the <code>NextToken</code> value in the next request.</p>', 'ListPoliciesRequest$NextToken' => '<p>If you specify a value for <code>MaxResults</code> and you have more <code>PolicySummary</code> objects than the number that you specify for <code>MaxResults</code>, AWS Firewall Manager returns a <code>NextToken</code> value in the response that allows you to list another group of <code>PolicySummary</code> objects. For the second and subsequent <code>ListPolicies</code> requests, specify the value of <code>NextToken</code> from the previous response to get information about another batch of <code>PolicySummary</code> objects.</p>', 'ListPoliciesResponse$NextToken' => '<p>If you have more <code>PolicySummary</code> objects than the number that you specified for <code>MaxResults</code> in the request, the response includes a <code>NextToken</code> value. To list more <code>PolicySummary</code> objects, submit another <code>ListPolicies</code> request, and specify the <code>NextToken</code> value from the response in the <code>NextToken</code> value in the next request.</p>', ], ], 'Policy' => [ 'base' => '<p>An AWS Firewall Manager policy.</p>', 'refs' => [ 'GetPolicyResponse$Policy' => '<p>Information about the specified AWS Firewall Manager policy.</p>', 'PutPolicyRequest$Policy' => '<p>The details of the AWS Firewall Manager policy to be created.</p>', 'PutPolicyResponse$Policy' => '<p>The details of the AWS Firewall Manager policy that was created.</p>', ], ], 'PolicyComplianceDetail' => [ 'base' => '<p>Describes the non-compliant resources in a member account for a specific AWS Firewall Manager policy. A maximum of 100 entries are displayed. If more than 100 resources are non-compliant, <code>EvaluationLimitExceeded</code> is set to <code>True</code>.</p>', 'refs' => [ 'GetComplianceDetailResponse$PolicyComplianceDetail' => '<p>Information about the resources and the policy that you specified in the <code>GetComplianceDetail</code> request.</p>', ], ], 'PolicyComplianceStatus' => [ 'base' => '<p>Indicates whether the account is compliant with the specified policy. An account is considered non-compliant if it includes resources that are not protected by the policy.</p>', 'refs' => [ 'PolicyComplianceStatusList$member' => NULL, ], ], 'PolicyComplianceStatusList' => [ 'base' => NULL, 'refs' => [ 'ListComplianceStatusResponse$PolicyComplianceStatusList' => '<p>An array of <code>PolicyComplianceStatus</code> objects.</p>', ], ], 'PolicyComplianceStatusType' => [ 'base' => NULL, 'refs' => [ 'EvaluationResult$ComplianceStatus' => '<p>Describes an AWS account\'s compliance with the AWS Firewall Manager policy.</p>', ], ], 'PolicyId' => [ 'base' => NULL, 'refs' => [ 'DeletePolicyRequest$PolicyId' => '<p>The ID of the policy that you want to delete. <code>PolicyId</code> is returned by <code>PutPolicy</code> and by <code>ListPolicies</code>.</p>', 'GetComplianceDetailRequest$PolicyId' => '<p>The ID of the policy that you want to get the details for. <code>PolicyId</code> is returned by <code>PutPolicy</code> and by <code>ListPolicies</code>.</p>', 'GetPolicyRequest$PolicyId' => '<p>The ID of the AWS Firewall Manager policy that you want the details for.</p>', 'ListComplianceStatusRequest$PolicyId' => '<p>The ID of the AWS Firewall Manager policy that you want the details for.</p>', 'Policy$PolicyId' => '<p>The ID of the AWS Firewall Manager policy.</p>', 'PolicyComplianceDetail$PolicyId' => '<p>The ID of the AWS Firewall Manager policy.</p>', 'PolicyComplianceStatus$PolicyId' => '<p>The ID of the AWS Firewall Manager policy.</p>', 'PolicySummary$PolicyId' => '<p>The ID of the specified policy.</p>', ], ], 'PolicySummary' => [ 'base' => '<p>Details of the AWS Firewall Manager policy. </p>', 'refs' => [ 'PolicySummaryList$member' => NULL, ], ], 'PolicySummaryList' => [ 'base' => NULL, 'refs' => [ 'ListPoliciesResponse$PolicyList' => '<p>An array of <code>PolicySummary</code> objects.</p>', ], ], 'PolicyUpdateToken' => [ 'base' => NULL, 'refs' => [ 'Policy$PolicyUpdateToken' => '<p>A unique identifier for each update to the policy. When issuing a <code>PutPolicy</code> request, the <code>PolicyUpdateToken</code> in the request must match the <code>PolicyUpdateToken</code> of the current policy version. To get the <code>PolicyUpdateToken</code> of the current policy version, use a <code>GetPolicy</code> request.</p>', ], ], 'PutNotificationChannelRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'ResourceArn' => [ 'base' => NULL, 'refs' => [ 'GetNotificationChannelResponse$SnsTopicArn' => '<p>The SNS topic that records AWS Firewall Manager activity. </p>', 'GetNotificationChannelResponse$SnsRoleName' => '<p>The IAM role that is used by AWS Firewall Manager to record activity to SNS.</p>', 'GetPolicyResponse$PolicyArn' => '<p>The Amazon Resource Name (ARN) of the specified policy.</p>', 'PolicySummary$PolicyArn' => '<p>The Amazon Resource Name (ARN) of the specified policy.</p>', 'PutNotificationChannelRequest$SnsTopicArn' => '<p>The Amazon Resource Name (ARN) of the SNS topic that collects notifications from AWS Firewall Manager.</p>', 'PutNotificationChannelRequest$SnsRoleName' => '<p>The Amazon Resource Name (ARN) of the IAM role that allows Amazon SNS to record AWS Firewall Manager activity. </p>', 'PutPolicyResponse$PolicyArn' => '<p>The Amazon Resource Name (ARN) of the policy that was created.</p>', ], ], 'ResourceCount' => [ 'base' => NULL, 'refs' => [ 'EvaluationResult$ViolatorCount' => '<p>Number of resources that are non-compliant with the specified policy. A resource is considered non-compliant if it is not associated with the specified policy.</p>', ], ], 'ResourceId' => [ 'base' => NULL, 'refs' => [ 'ComplianceViolator$ResourceId' => '<p>The resource ID.</p>', ], ], 'ResourceName' => [ 'base' => NULL, 'refs' => [ 'Policy$PolicyName' => '<p>The friendly name of the AWS Firewall Manager policy.</p>', 'PolicyComplianceStatus$PolicyName' => '<p>The friendly name of the AWS Firewall Manager policy.</p>', 'PolicySummary$PolicyName' => '<p>The friendly name of the specified policy.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource was not found.</p>', 'refs' => [], ], 'ResourceTag' => [ 'base' => '<p>The resource tags that AWS Firewall Manager uses to determine if a particular resource should be included or excluded from protection by the AWS Firewall Manager policy. Tags enable you to categorize your AWS resources in different ways, for example, by purpose, owner, or environment. Each tag consists of a key and an optional value, both of which you define. Tags are combined with an "OR." That is, if you add more than one tag, if any of the tags matches, the resource is considered a match for the include or exclude. <a href="https://docs.aws.amazon.com/awsconsolehelpdocs/latest/gsg/tag-editor.html">Working with Tag Editor</a>.</p>', 'refs' => [ 'ResourceTags$member' => NULL, ], ], 'ResourceTags' => [ 'base' => NULL, 'refs' => [ 'Policy$ResourceTags' => '<p>An array of <code>ResourceTag</code> objects.</p>', ], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'ComplianceViolator$ResourceType' => '<p>The resource type. This is in the format shown in <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html">AWS Resource Types Reference</a>. Valid values are <code>AWS::ElasticLoadBalancingV2::LoadBalancer</code> or <code>AWS::CloudFront::Distribution</code>.</p>', 'Policy$ResourceType' => '<p>The type of resource to protect with the policy, either an Application Load Balancer or a CloudFront distribution. This is in the format shown in <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html">AWS Resource Types Reference</a>. Valid values are <code>AWS::ElasticLoadBalancingV2::LoadBalancer</code> or <code>AWS::CloudFront::Distribution</code>.</p>', 'PolicySummary$ResourceType' => '<p>The type of resource to protect with the policy, either an Application Load Balancer or a CloudFront distribution. This is in the format shown in <a href="https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html">AWS Resource Types Reference</a>. Valid values are <code>AWS::ElasticLoadBalancingV2::LoadBalancer</code> or <code>AWS::CloudFront::Distribution</code>.</p>', ], ], 'SecurityServicePolicyData' => [ 'base' => '<p>Details about the security service that is being used to protect the resources.</p>', 'refs' => [ 'Policy$SecurityServicePolicyData' => '<p>Details about the security service that is being used to protect the resources.</p>', ], ], 'SecurityServiceType' => [ 'base' => NULL, 'refs' => [ 'PolicySummary$SecurityServiceType' => '<p>The service that the policy is using to protect the resources. This value is <code>WAF</code>.</p>', 'SecurityServicePolicyData$Type' => '<p>The service that the policy is using to protect the resources. This value is <code>WAF</code>.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'ResourceTag$Key' => '<p>The resource tag key.</p>', ], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'ResourceTag$Value' => '<p>The resource tag value.</p>', ], ], 'TimeStamp' => [ 'base' => NULL, 'refs' => [ 'PolicyComplianceDetail$ExpiredAt' => '<p>A time stamp that indicates when the returned information should be considered out-of-date.</p>', 'PolicyComplianceStatus$LastUpdated' => '<p>Time stamp of the last update to the <code>EvaluationResult</code> objects.</p>', ], ], 'ViolationReason' => [ 'base' => NULL, 'refs' => [ 'ComplianceViolator$ViolationReason' => '<p>The reason that the resource is not protected by the policy.</p>', ], ], ],];