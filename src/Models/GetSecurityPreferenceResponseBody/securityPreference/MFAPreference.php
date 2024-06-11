<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class MFAPreference extends Model
{
    /**
     * @description Indicates whether RAM users can manage their MFA devices. Valid values:
     *
     *   true: RAM users can manage their MFA devices.
     *   false: RAM users cannot manage their MFA devices.
     *
     * @example true
     *
     * @var bool
     */
    public $allowUserToManageMFADevices;
    protected $_name = [
        'allowUserToManageMFADevices' => 'AllowUserToManageMFADevices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUserToManageMFADevices) {
            $res['AllowUserToManageMFADevices'] = $this->allowUserToManageMFADevices;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MFAPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToManageMFADevices'])) {
            $model->allowUserToManageMFADevices = $map['AllowUserToManageMFADevices'];
        }

        return $model;
    }
}
