<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTempId()
 * @method $this withTempId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnlyAmount()
 * @method $this withOnlyAmount($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeIdleInstancesForGlobal extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }
}