<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The description.
     *
     * @example Cloud computing engineer
     *
     * @var string
     */
    public $comments;

    /**
     * @description The time when the RAM user was created. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The display name of the RAM user.
     *
     * @example Zhangq****
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the RAM user.
     *
     * > This parameter is unavailable.
     * @example zhangq****@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The mobile phone number of the RAM user.
     *
     * > This parameter is unavailable.
     * @example 86-1860000****
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @description The point in time when the information about the RAM user was last modified. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $updateDate;

    /**
     * @description The ID of the RAM user.
     *
     * @example 122748924538****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the RAM user.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'comments'    => 'Comments',
        'createDate'  => 'CreateDate',
        'displayName' => 'DisplayName',
        'email'       => 'Email',
        'mobilePhone' => 'MobilePhone',
        'updateDate'  => 'UpdateDate',
        'userId'      => 'UserId',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
