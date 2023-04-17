<?php
namespace Magento\Framework\Message\Manager;

/**
 * Interceptor class for @see \Magento\Framework\Message\Manager
 */
class Interceptor extends \Magento\Framework\Message\Manager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Message\Session $session, \Magento\Framework\Message\Factory $messageFactory, \Magento\Framework\Message\CollectionFactory $messagesFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Psr\Log\LoggerInterface $logger, $defaultGroup = 'default', ?\Magento\Framework\Message\ExceptionMessageFactoryInterface $exceptionMessageFactory = null)
    {
        $this->___init();
        parent::__construct($session, $messageFactory, $messagesFactory, $eventManager, $logger, $defaultGroup, $exceptionMessageFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultGroup()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultGroup');
        return $pluginInfo ? $this->___callPlugins('getDefaultGroup', func_get_args(), $pluginInfo) : parent::getDefaultGroup();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessages($clear = false, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessages');
        return $pluginInfo ? $this->___callPlugins('getMessages', func_get_args(), $pluginInfo) : parent::getMessages($clear, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addMessage(\Magento\Framework\Message\MessageInterface $message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMessage');
        return $pluginInfo ? $this->___callPlugins('addMessage', func_get_args(), $pluginInfo) : parent::addMessage($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addMessages(array $messages, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMessages');
        return $pluginInfo ? $this->___callPlugins('addMessages', func_get_args(), $pluginInfo) : parent::addMessages($messages, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addError($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addError');
        return $pluginInfo ? $this->___callPlugins('addError', func_get_args(), $pluginInfo) : parent::addError($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addWarning($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addWarning');
        return $pluginInfo ? $this->___callPlugins('addWarning', func_get_args(), $pluginInfo) : parent::addWarning($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addNotice($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addNotice');
        return $pluginInfo ? $this->___callPlugins('addNotice', func_get_args(), $pluginInfo) : parent::addNotice($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addSuccess($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addSuccess');
        return $pluginInfo ? $this->___callPlugins('addSuccess', func_get_args(), $pluginInfo) : parent::addSuccess($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addUniqueMessages(array $messages, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUniqueMessages');
        return $pluginInfo ? $this->___callPlugins('addUniqueMessages', func_get_args(), $pluginInfo) : parent::addUniqueMessages($messages, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addException(\Exception $exception, $alternativeText = null, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addException');
        return $pluginInfo ? $this->___callPlugins('addException', func_get_args(), $pluginInfo) : parent::addException($exception, $alternativeText, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function hasMessages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasMessages');
        return $pluginInfo ? $this->___callPlugins('hasMessages', func_get_args(), $pluginInfo) : parent::hasMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function addExceptionMessage(\Exception $exception, $alternativeText = null, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addExceptionMessage');
        return $pluginInfo ? $this->___callPlugins('addExceptionMessage', func_get_args(), $pluginInfo) : parent::addExceptionMessage($exception, $alternativeText, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addErrorMessage($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addErrorMessage');
        return $pluginInfo ? $this->___callPlugins('addErrorMessage', func_get_args(), $pluginInfo) : parent::addErrorMessage($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addWarningMessage($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addWarningMessage');
        return $pluginInfo ? $this->___callPlugins('addWarningMessage', func_get_args(), $pluginInfo) : parent::addWarningMessage($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addNoticeMessage($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addNoticeMessage');
        return $pluginInfo ? $this->___callPlugins('addNoticeMessage', func_get_args(), $pluginInfo) : parent::addNoticeMessage($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addSuccessMessage($message, $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addSuccessMessage');
        return $pluginInfo ? $this->___callPlugins('addSuccessMessage', func_get_args(), $pluginInfo) : parent::addSuccessMessage($message, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addComplexErrorMessage($identifier, array $data = [], $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addComplexErrorMessage');
        return $pluginInfo ? $this->___callPlugins('addComplexErrorMessage', func_get_args(), $pluginInfo) : parent::addComplexErrorMessage($identifier, $data, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addComplexWarningMessage($identifier, array $data = [], $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addComplexWarningMessage');
        return $pluginInfo ? $this->___callPlugins('addComplexWarningMessage', func_get_args(), $pluginInfo) : parent::addComplexWarningMessage($identifier, $data, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addComplexNoticeMessage($identifier, array $data = [], $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addComplexNoticeMessage');
        return $pluginInfo ? $this->___callPlugins('addComplexNoticeMessage', func_get_args(), $pluginInfo) : parent::addComplexNoticeMessage($identifier, $data, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function addComplexSuccessMessage($identifier, array $data = [], $group = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addComplexSuccessMessage');
        return $pluginInfo ? $this->___callPlugins('addComplexSuccessMessage', func_get_args(), $pluginInfo) : parent::addComplexSuccessMessage($identifier, $data, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function createMessage($type, $identifier = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createMessage');
        return $pluginInfo ? $this->___callPlugins('createMessage', func_get_args(), $pluginInfo) : parent::createMessage($type, $identifier);
    }
}
