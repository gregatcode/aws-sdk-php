<?php
return [
  'metadata' =>
  [
    'apiVersion' => '2013-01-01',
    'endpointPrefix' => 'cloudsearch',
    'serviceFullName' => 'Amazon CloudSearch',
    'signatureVersion' => 'v4',
    'xmlNamespace' => 'http://cloudsearch.amazonaws.com/doc/2013-01-01/',
    'protocol' => 'query',
  ],
  'operations' =>
  [
    'BuildSuggesters' =>
    [
      'name' => 'BuildSuggesters',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'BuildSuggestersRequest',
      ],
      'output' =>
      [
        'shape' => 'BuildSuggestersResponse',
        'resultWrapper' => 'BuildSuggestersResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateDomain' =>
    [
      'name' => 'CreateDomain',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'CreateDomainRequest',
      ],
      'output' =>
      [
        'shape' => 'CreateDomainResponse',
        'resultWrapper' => 'CreateDomainResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DefineAnalysisScheme' =>
    [
      'name' => 'DefineAnalysisScheme',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DefineAnalysisSchemeRequest',
      ],
      'output' =>
      [
        'shape' => 'DefineAnalysisSchemeResponse',
        'resultWrapper' => 'DefineAnalysisSchemeResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DefineExpression' =>
    [
      'name' => 'DefineExpression',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DefineExpressionRequest',
      ],
      'output' =>
      [
        'shape' => 'DefineExpressionResponse',
        'resultWrapper' => 'DefineExpressionResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DefineIndexField' =>
    [
      'name' => 'DefineIndexField',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DefineIndexFieldRequest',
      ],
      'output' =>
      [
        'shape' => 'DefineIndexFieldResponse',
        'resultWrapper' => 'DefineIndexFieldResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DefineSuggester' =>
    [
      'name' => 'DefineSuggester',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DefineSuggesterRequest',
      ],
      'output' =>
      [
        'shape' => 'DefineSuggesterResponse',
        'resultWrapper' => 'DefineSuggesterResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteAnalysisScheme' =>
    [
      'name' => 'DeleteAnalysisScheme',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteAnalysisSchemeRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteAnalysisSchemeResponse',
        'resultWrapper' => 'DeleteAnalysisSchemeResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteDomain' =>
    [
      'name' => 'DeleteDomain',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteDomainRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteDomainResponse',
        'resultWrapper' => 'DeleteDomainResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteExpression' =>
    [
      'name' => 'DeleteExpression',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteExpressionRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteExpressionResponse',
        'resultWrapper' => 'DeleteExpressionResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteIndexField' =>
    [
      'name' => 'DeleteIndexField',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteIndexFieldRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteIndexFieldResponse',
        'resultWrapper' => 'DeleteIndexFieldResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteSuggester' =>
    [
      'name' => 'DeleteSuggester',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteSuggesterRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteSuggesterResponse',
        'resultWrapper' => 'DeleteSuggesterResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeAnalysisSchemes' =>
    [
      'name' => 'DescribeAnalysisSchemes',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeAnalysisSchemesRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeAnalysisSchemesResponse',
        'resultWrapper' => 'DescribeAnalysisSchemesResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeAvailabilityOptions' =>
    [
      'name' => 'DescribeAvailabilityOptions',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeAvailabilityOptionsRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeAvailabilityOptionsResponse',
        'resultWrapper' => 'DescribeAvailabilityOptionsResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        5 =>
        [
          'shape' => 'DisabledOperationException',
          'error' =>
          [
            'code' => 'DisabledAction',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeDomains' =>
    [
      'name' => 'DescribeDomains',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeDomainsRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeDomainsResponse',
        'resultWrapper' => 'DescribeDomainsResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeExpressions' =>
    [
      'name' => 'DescribeExpressions',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeExpressionsRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeExpressionsResponse',
        'resultWrapper' => 'DescribeExpressionsResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeIndexFields' =>
    [
      'name' => 'DescribeIndexFields',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeIndexFieldsRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeIndexFieldsResponse',
        'resultWrapper' => 'DescribeIndexFieldsResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeScalingParameters' =>
    [
      'name' => 'DescribeScalingParameters',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeScalingParametersRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeScalingParametersResponse',
        'resultWrapper' => 'DescribeScalingParametersResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeServiceAccessPolicies' =>
    [
      'name' => 'DescribeServiceAccessPolicies',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeServiceAccessPoliciesRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeServiceAccessPoliciesResponse',
        'resultWrapper' => 'DescribeServiceAccessPoliciesResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeSuggesters' =>
    [
      'name' => 'DescribeSuggesters',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeSuggestersRequest',
      ],
      'output' =>
      [
        'shape' => 'DescribeSuggestersResponse',
        'resultWrapper' => 'DescribeSuggestersResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'IndexDocuments' =>
    [
      'name' => 'IndexDocuments',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'IndexDocumentsRequest',
      ],
      'output' =>
      [
        'shape' => 'IndexDocumentsResponse',
        'resultWrapper' => 'IndexDocumentsResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListDomainNames' =>
    [
      'name' => 'ListDomainNames',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'output' =>
      [
        'shape' => 'ListDomainNamesResponse',
        'resultWrapper' => 'ListDomainNamesResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
      ],
    ],
    'UpdateAvailabilityOptions' =>
    [
      'name' => 'UpdateAvailabilityOptions',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'UpdateAvailabilityOptionsRequest',
      ],
      'output' =>
      [
        'shape' => 'UpdateAvailabilityOptionsResponse',
        'resultWrapper' => 'UpdateAvailabilityOptionsResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        5 =>
        [
          'shape' => 'DisabledOperationException',
          'error' =>
          [
            'code' => 'DisabledAction',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateScalingParameters' =>
    [
      'name' => 'UpdateScalingParameters',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'UpdateScalingParametersRequest',
      ],
      'output' =>
      [
        'shape' => 'UpdateScalingParametersResponse',
        'resultWrapper' => 'UpdateScalingParametersResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateServiceAccessPolicies' =>
    [
      'name' => 'UpdateServiceAccessPolicies',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'UpdateServiceAccessPoliciesRequest',
      ],
      'output' =>
      [
        'shape' => 'UpdateServiceAccessPoliciesResponse',
        'resultWrapper' => 'UpdateServiceAccessPoliciesResult',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BaseException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalException',
          'error' =>
          [
            'code' => 'InternalException',
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'code' => 'LimitExceeded',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'code' => 'ResourceNotFound',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'InvalidTypeException',
          'error' =>
          [
            'code' => 'InvalidType',
            'httpStatusCode' => 409,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' =>
  [
    'APIVersion' =>
    [
      'type' => 'string',
    ],
    'ARN' =>
    [
      'type' => 'string',
    ],
    'AccessPoliciesStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'PolicyDocument',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'AlgorithmicStemming' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'none',
        1 => 'minimal',
        2 => 'light',
        3 => 'full',
      ],
    ],
    'AnalysisOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Synonyms' =>
        [
          'shape' => 'String',
        ],
        'Stopwords' =>
        [
          'shape' => 'String',
        ],
        'StemmingDictionary' =>
        [
          'shape' => 'String',
        ],
        'JapaneseTokenizationDictionary' =>
        [
          'shape' => 'String',
        ],
        'AlgorithmicStemming' =>
        [
          'shape' => 'AlgorithmicStemming',
        ],
      ],
    ],
    'AnalysisScheme' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AnalysisSchemeName',
        1 => 'AnalysisSchemeLanguage',
      ],
      'members' =>
      [
        'AnalysisSchemeName' =>
        [
          'shape' => 'FieldName',
        ],
        'AnalysisSchemeLanguage' =>
        [
          'shape' => 'AnalysisSchemeLanguage',
        ],
        'AnalysisOptions' =>
        [
          'shape' => 'AnalysisOptions',
        ],
      ],
    ],
    'AnalysisSchemeLanguage' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'ar',
        1 => 'bg',
        2 => 'ca',
        3 => 'cs',
        4 => 'da',
        5 => 'de',
        6 => 'el',
        7 => 'en',
        8 => 'es',
        9 => 'eu',
        10 => 'fa',
        11 => 'fi',
        12 => 'fr',
        13 => 'ga',
        14 => 'gl',
        15 => 'he',
        16 => 'hi',
        17 => 'hu',
        18 => 'hy',
        19 => 'id',
        20 => 'it',
        21 => 'ja',
        22 => 'ko',
        23 => 'lv',
        24 => 'mul',
        25 => 'nl',
        26 => 'no',
        27 => 'pt',
        28 => 'ro',
        29 => 'ru',
        30 => 'sv',
        31 => 'th',
        32 => 'tr',
        33 => 'zh-Hans',
        34 => 'zh-Hant',
      ],
    ],
    'AnalysisSchemeStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'AnalysisScheme',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'AnalysisSchemeStatusList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'AnalysisSchemeStatus',
      ],
    ],
    'AvailabilityOptionsStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'MultiAZ',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'BaseException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Code' =>
        [
          'shape' => 'ErrorCode',
        ],
        'Message' =>
        [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'Boolean' =>
    [
      'type' => 'boolean',
    ],
    'BuildSuggestersRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'BuildSuggestersResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'FieldNames' =>
        [
          'shape' => 'FieldNameList',
        ],
      ],
    ],
    'CreateDomainRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'CreateDomainResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DomainStatus' =>
        [
          'shape' => 'DomainStatus',
        ],
      ],
    ],
    'DateArrayOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceFields' =>
        [
          'shape' => 'FieldNameCommaList',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DateOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SortEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DefineAnalysisSchemeRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'AnalysisScheme',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'AnalysisScheme' =>
        [
          'shape' => 'AnalysisScheme',
        ],
      ],
    ],
    'DefineAnalysisSchemeResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AnalysisScheme',
      ],
      'members' =>
      [
        'AnalysisScheme' =>
        [
          'shape' => 'AnalysisSchemeStatus',
        ],
      ],
    ],
    'DefineExpressionRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'Expression',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'Expression' =>
        [
          'shape' => 'Expression',
        ],
      ],
    ],
    'DefineExpressionResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Expression',
      ],
      'members' =>
      [
        'Expression' =>
        [
          'shape' => 'ExpressionStatus',
        ],
      ],
    ],
    'DefineIndexFieldRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'IndexField',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'IndexField' =>
        [
          'shape' => 'IndexField',
        ],
      ],
    ],
    'DefineIndexFieldResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IndexField',
      ],
      'members' =>
      [
        'IndexField' =>
        [
          'shape' => 'IndexFieldStatus',
        ],
      ],
    ],
    'DefineSuggesterRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'Suggester',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'Suggester' =>
        [
          'shape' => 'Suggester',
        ],
      ],
    ],
    'DefineSuggesterResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Suggester',
      ],
      'members' =>
      [
        'Suggester' =>
        [
          'shape' => 'SuggesterStatus',
        ],
      ],
    ],
    'DeleteAnalysisSchemeRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'AnalysisSchemeName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'AnalysisSchemeName' =>
        [
          'shape' => 'FieldName',
        ],
      ],
    ],
    'DeleteAnalysisSchemeResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AnalysisScheme',
      ],
      'members' =>
      [
        'AnalysisScheme' =>
        [
          'shape' => 'AnalysisSchemeStatus',
        ],
      ],
    ],
    'DeleteDomainRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'DeleteDomainResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DomainStatus' =>
        [
          'shape' => 'DomainStatus',
        ],
      ],
    ],
    'DeleteExpressionRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'ExpressionName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'ExpressionName' =>
        [
          'shape' => 'FieldName',
        ],
      ],
    ],
    'DeleteExpressionResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Expression',
      ],
      'members' =>
      [
        'Expression' =>
        [
          'shape' => 'ExpressionStatus',
        ],
      ],
    ],
    'DeleteIndexFieldRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'IndexFieldName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'IndexFieldName' =>
        [
          'shape' => 'FieldName',
        ],
      ],
    ],
    'DeleteIndexFieldResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IndexField',
      ],
      'members' =>
      [
        'IndexField' =>
        [
          'shape' => 'IndexFieldStatus',
        ],
      ],
    ],
    'DeleteSuggesterRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'SuggesterName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'SuggesterName' =>
        [
          'shape' => 'FieldName',
        ],
      ],
    ],
    'DeleteSuggesterResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Suggester',
      ],
      'members' =>
      [
        'Suggester' =>
        [
          'shape' => 'SuggesterStatus',
        ],
      ],
    ],
    'DescribeAnalysisSchemesRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'AnalysisSchemeNames' =>
        [
          'shape' => 'FieldNameList',
        ],
        'Deployed' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeAnalysisSchemesResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AnalysisSchemes',
      ],
      'members' =>
      [
        'AnalysisSchemes' =>
        [
          'shape' => 'AnalysisSchemeStatusList',
        ],
      ],
    ],
    'DescribeAvailabilityOptionsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'Deployed' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeAvailabilityOptionsResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'AvailabilityOptions' =>
        [
          'shape' => 'AvailabilityOptionsStatus',
        ],
      ],
    ],
    'DescribeDomainsRequest' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DomainNames' =>
        [
          'shape' => 'DomainNameList',
        ],
      ],
    ],
    'DescribeDomainsResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainStatusList',
      ],
      'members' =>
      [
        'DomainStatusList' =>
        [
          'shape' => 'DomainStatusList',
        ],
      ],
    ],
    'DescribeExpressionsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'ExpressionNames' =>
        [
          'shape' => 'FieldNameList',
        ],
        'Deployed' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeExpressionsResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Expressions',
      ],
      'members' =>
      [
        'Expressions' =>
        [
          'shape' => 'ExpressionStatusList',
        ],
      ],
    ],
    'DescribeIndexFieldsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'FieldNames' =>
        [
          'shape' => 'FieldNameList',
        ],
        'Deployed' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeIndexFieldsResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IndexFields',
      ],
      'members' =>
      [
        'IndexFields' =>
        [
          'shape' => 'IndexFieldStatusList',
        ],
      ],
    ],
    'DescribeScalingParametersRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'DescribeScalingParametersResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'ScalingParameters',
      ],
      'members' =>
      [
        'ScalingParameters' =>
        [
          'shape' => 'ScalingParametersStatus',
        ],
      ],
    ],
    'DescribeServiceAccessPoliciesRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'Deployed' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeServiceAccessPoliciesResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AccessPolicies',
      ],
      'members' =>
      [
        'AccessPolicies' =>
        [
          'shape' => 'AccessPoliciesStatus',
        ],
      ],
    ],
    'DescribeSuggestersRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'SuggesterNames' =>
        [
          'shape' => 'FieldNameList',
        ],
        'Deployed' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeSuggestersResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Suggesters',
      ],
      'members' =>
      [
        'Suggesters' =>
        [
          'shape' => 'SuggesterStatusList',
        ],
      ],
    ],
    'DisabledOperationException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'DisabledAction',
        'httpStatusCode' => 409,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'DocumentSuggesterOptions' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'SourceField',
      ],
      'members' =>
      [
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'FuzzyMatching' =>
        [
          'shape' => 'SuggesterFuzzyMatching',
        ],
        'SortExpression' =>
        [
          'shape' => 'String',
        ],
      ],
    ],
    'DomainId' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
    ],
    'DomainName' =>
    [
      'type' => 'string',
      'min' => 3,
      'max' => 28,
      'pattern' => '[a-z][a-z0-9\\-]+',
    ],
    'DomainNameList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'DomainName',
      ],
    ],
    'DomainNameMap' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'DomainName',
      ],
      'value' =>
      [
        'shape' => 'APIVersion',
      ],
    ],
    'DomainStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainId',
        1 => 'DomainName',
        2 => 'RequiresIndexDocuments',
      ],
      'members' =>
      [
        'DomainId' =>
        [
          'shape' => 'DomainId',
        ],
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'ARN' =>
        [
          'shape' => 'ARN',
        ],
        'Created' =>
        [
          'shape' => 'Boolean',
        ],
        'Deleted' =>
        [
          'shape' => 'Boolean',
        ],
        'DocService' =>
        [
          'shape' => 'ServiceEndpoint',
        ],
        'SearchService' =>
        [
          'shape' => 'ServiceEndpoint',
        ],
        'RequiresIndexDocuments' =>
        [
          'shape' => 'Boolean',
        ],
        'Processing' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchInstanceType' =>
        [
          'shape' => 'SearchInstanceType',
        ],
        'SearchPartitionCount' =>
        [
          'shape' => 'PartitionCount',
        ],
        'SearchInstanceCount' =>
        [
          'shape' => 'InstanceCount',
        ],
        'Limits' =>
        [
          'shape' => 'Limits',
        ],
      ],
    ],
    'DomainStatusList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'DomainStatus',
      ],
    ],
    'Double' =>
    [
      'type' => 'double',
    ],
    'DoubleArrayOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'Double',
        ],
        'SourceFields' =>
        [
          'shape' => 'FieldNameCommaList',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DoubleOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'Double',
        ],
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SortEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'ErrorCode' =>
    [
      'type' => 'string',
    ],
    'ErrorMessage' =>
    [
      'type' => 'string',
    ],
    'Expression' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'ExpressionName',
        1 => 'ExpressionValue',
      ],
      'members' =>
      [
        'ExpressionName' =>
        [
          'shape' => 'FieldName',
        ],
        'ExpressionValue' =>
        [
          'shape' => 'ExpressionValue',
        ],
      ],
    ],
    'ExpressionStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'Expression',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'ExpressionStatusList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'ExpressionStatus',
      ],
    ],
    'ExpressionValue' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 10240,
    ],
    'FieldName' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
      'pattern' => '[a-z][a-z0-9_]*',
    ],
    'FieldNameCommaList' =>
    [
      'type' => 'string',
      'pattern' => '\\s*[a-z][a-z0-9_]*\\s*(,\\s*[a-z][a-z0-9_]*\\s*]*',
    ],
    'FieldNameList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'FieldName',
      ],
    ],
    'FieldValue' =>
    [
      'type' => 'string',
      'min' => 0,
      'max' => 1024,
    ],
    'IndexDocumentsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'IndexDocumentsResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'FieldNames' =>
        [
          'shape' => 'FieldNameList',
        ],
      ],
    ],
    'IndexField' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IndexFieldName',
        1 => 'IndexFieldType',
      ],
      'members' =>
      [
        'IndexFieldName' =>
        [
          'shape' => 'FieldName',
        ],
        'IndexFieldType' =>
        [
          'shape' => 'IndexFieldType',
        ],
        'IntOptions' =>
        [
          'shape' => 'IntOptions',
        ],
        'DoubleOptions' =>
        [
          'shape' => 'DoubleOptions',
        ],
        'LiteralOptions' =>
        [
          'shape' => 'LiteralOptions',
        ],
        'TextOptions' =>
        [
          'shape' => 'TextOptions',
        ],
        'DateOptions' =>
        [
          'shape' => 'DateOptions',
        ],
        'LatLonOptions' =>
        [
          'shape' => 'LatLonOptions',
        ],
        'IntArrayOptions' =>
        [
          'shape' => 'IntArrayOptions',
        ],
        'DoubleArrayOptions' =>
        [
          'shape' => 'DoubleArrayOptions',
        ],
        'LiteralArrayOptions' =>
        [
          'shape' => 'LiteralArrayOptions',
        ],
        'TextArrayOptions' =>
        [
          'shape' => 'TextArrayOptions',
        ],
        'DateArrayOptions' =>
        [
          'shape' => 'DateArrayOptions',
        ],
      ],
    ],
    'IndexFieldStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'IndexField',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'IndexFieldStatusList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'IndexFieldStatus',
      ],
    ],
    'IndexFieldType' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'int',
        1 => 'double',
        2 => 'literal',
        3 => 'text',
        4 => 'date',
        5 => 'latlon',
        6 => 'int-array',
        7 => 'double-array',
        8 => 'literal-array',
        9 => 'text-array',
        10 => 'date-array',
      ],
    ],
    'InstanceCount' =>
    [
      'type' => 'integer',
      'min' => 1,
    ],
    'IntArrayOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'Long',
        ],
        'SourceFields' =>
        [
          'shape' => 'FieldNameCommaList',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'IntOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'Long',
        ],
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SortEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'InternalException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'InternalException',
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'InvalidTypeException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'InvalidType',
        'httpStatusCode' => 409,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'LatLonOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SortEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'LimitExceededException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'LimitExceeded',
        'httpStatusCode' => 409,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'Limits' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'MaximumReplicationCount',
        1 => 'MaximumPartitionCount',
      ],
      'members' =>
      [
        'MaximumReplicationCount' =>
        [
          'shape' => 'MaximumReplicationCount',
        ],
        'MaximumPartitionCount' =>
        [
          'shape' => 'MaximumPartitionCount',
        ],
      ],
    ],
    'ListDomainNamesResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DomainNames' =>
        [
          'shape' => 'DomainNameMap',
        ],
      ],
    ],
    'LiteralArrayOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceFields' =>
        [
          'shape' => 'FieldNameCommaList',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'LiteralOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'FacetEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SearchEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SortEnabled' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'Long' =>
    [
      'type' => 'long',
    ],
    'MaximumPartitionCount' =>
    [
      'type' => 'integer',
      'min' => 1,
    ],
    'MaximumReplicationCount' =>
    [
      'type' => 'integer',
      'min' => 1,
    ],
    'MultiAZ' =>
    [
      'type' => 'boolean',
    ],
    'OptionState' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'RequiresIndexDocuments',
        1 => 'Processing',
        2 => 'Active',
        3 => 'FailedToValidate',
      ],
    ],
    'OptionStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'CreationDate',
        1 => 'UpdateDate',
        2 => 'State',
      ],
      'members' =>
      [
        'CreationDate' =>
        [
          'shape' => 'UpdateTimestamp',
        ],
        'UpdateDate' =>
        [
          'shape' => 'UpdateTimestamp',
        ],
        'UpdateVersion' =>
        [
          'shape' => 'UIntValue',
        ],
        'State' =>
        [
          'shape' => 'OptionState',
        ],
        'PendingDeletion' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'PartitionCount' =>
    [
      'type' => 'integer',
      'min' => 1,
    ],
    'PartitionInstanceType' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'search.m1.small',
        1 => 'search.m1.large',
        2 => 'search.m2.xlarge',
        3 => 'search.m2.2xlarge',
      ],
    ],
    'PolicyDocument' =>
    [
      'type' => 'string',
    ],
    'ResourceNotFoundException' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'error' =>
      [
        'code' => 'ResourceNotFound',
        'httpStatusCode' => 409,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ScalingParameters' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DesiredInstanceType' =>
        [
          'shape' => 'PartitionInstanceType',
        ],
        'DesiredReplicationCount' =>
        [
          'shape' => 'UIntValue',
        ],
        'DesiredPartitionCount' =>
        [
          'shape' => 'UIntValue',
        ],
      ],
    ],
    'ScalingParametersStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'ScalingParameters',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'SearchInstanceType' =>
    [
      'type' => 'string',
    ],
    'ServiceEndpoint' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Endpoint' =>
        [
          'shape' => 'ServiceUrl',
        ],
      ],
    ],
    'ServiceUrl' =>
    [
      'type' => 'string',
    ],
    'String' =>
    [
      'type' => 'string',
    ],
    'Suggester' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'SuggesterName',
        1 => 'DocumentSuggesterOptions',
      ],
      'members' =>
      [
        'SuggesterName' =>
        [
          'shape' => 'FieldName',
        ],
        'DocumentSuggesterOptions' =>
        [
          'shape' => 'DocumentSuggesterOptions',
        ],
      ],
    ],
    'SuggesterFuzzyMatching' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'none',
        1 => 'low',
        2 => 'high',
      ],
    ],
    'SuggesterStatus' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Options',
        1 => 'Status',
      ],
      'members' =>
      [
        'Options' =>
        [
          'shape' => 'Suggester',
        ],
        'Status' =>
        [
          'shape' => 'OptionStatus',
        ],
      ],
    ],
    'SuggesterStatusList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'SuggesterStatus',
      ],
    ],
    'TextArrayOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceFields' =>
        [
          'shape' => 'FieldNameCommaList',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'HighlightEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'AnalysisScheme' =>
        [
          'shape' => 'Word',
        ],
      ],
    ],
    'TextOptions' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DefaultValue' =>
        [
          'shape' => 'FieldValue',
        ],
        'SourceField' =>
        [
          'shape' => 'FieldName',
        ],
        'ReturnEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'SortEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'HighlightEnabled' =>
        [
          'shape' => 'Boolean',
        ],
        'AnalysisScheme' =>
        [
          'shape' => 'Word',
        ],
      ],
    ],
    'UIntValue' =>
    [
      'type' => 'integer',
      'min' => 0,
    ],
    'UpdateAvailabilityOptionsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'MultiAZ',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'MultiAZ' =>
        [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'UpdateAvailabilityOptionsResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'AvailabilityOptions' =>
        [
          'shape' => 'AvailabilityOptionsStatus',
        ],
      ],
    ],
    'UpdateScalingParametersRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'ScalingParameters',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'ScalingParameters' =>
        [
          'shape' => 'ScalingParameters',
        ],
      ],
    ],
    'UpdateScalingParametersResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'ScalingParameters',
      ],
      'members' =>
      [
        'ScalingParameters' =>
        [
          'shape' => 'ScalingParametersStatus',
        ],
      ],
    ],
    'UpdateServiceAccessPoliciesRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'DomainName',
        1 => 'AccessPolicies',
      ],
      'members' =>
      [
        'DomainName' =>
        [
          'shape' => 'DomainName',
        ],
        'AccessPolicies' =>
        [
          'shape' => 'PolicyDocument',
        ],
      ],
    ],
    'UpdateServiceAccessPoliciesResponse' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AccessPolicies',
      ],
      'members' =>
      [
        'AccessPolicies' =>
        [
          'shape' => 'AccessPoliciesStatus',
        ],
      ],
    ],
    'UpdateTimestamp' =>
    [
      'type' => 'timestamp',
    ],
    'Word' =>
    [
      'type' => 'string',
      'pattern' => '[\\S]+',
    ],
  ],
];