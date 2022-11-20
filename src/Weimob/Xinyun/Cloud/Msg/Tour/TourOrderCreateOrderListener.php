<?php

namespace WeimobAbility\Weimob\Xinyun\Cloud\Msg\Tour;

use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessage;
use WeimobAbility\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,037
 * @author weimobcloud
 * @create 2022年11月20日
 */
interface TourOrderCreateOrderListener
{
    const topic = 'tour_order';
    const event = 'createOrder';
    const classType = CreateOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateOrderMessage implements \JsonSerializable
{
    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

