<?php
namespace Htc\Knockout\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Serialize\SerializerInterface;

class Index extends Template
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * Page constructor.
     *
     * @param Template\Context $context
     * @param SerializerInterface $serializer
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        SerializerInterface $serializer,
        array $data = []
    ) {
        $this->serializer = $serializer;
        parent::__construct($context, $data);
    }
    public function getConfigData()
    {
        $dropdown = [
            [
                'value' => '0',
                'name' => 'Thong PD',
                'age' => '35',
                'job' => 'developer'
            ],
            [
                'value' => '1',
                'name' => 'Hieu NV',
                'age' => '31',
                'job' => 'developer'
            ],
            [
                'value' => '2',
                'name' => 'Cuong TM',
                'age' => '28',
                'job' => 'developer'
            ]
        ];
        return $this->serializer->serialize(['dropdown' => $dropdown]);
    }
}