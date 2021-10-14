<?php

namespace ContainerJPVCNl5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86712 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb779e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties087b9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getConnection', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getMetadataFactory', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getExpressionBuilder', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'beginTransaction', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getCache', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'transactional', array('func' => $func), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->transactional($func);
    }

    public function commit()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'commit', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->commit();
    }

    public function rollback()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'rollback', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getClassMetadata', array('className' => $className), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'createQuery', array('dql' => $dql), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'createNamedQuery', array('name' => $name), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'createQueryBuilder', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'flush', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'clear', array('entityName' => $entityName), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->clear($entityName);
    }

    public function close()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'close', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->close();
    }

    public function persist($entity)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'persist', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'remove', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'refresh', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'detach', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'merge', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'contains', array('entity' => $entity), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getEventManager', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getConfiguration', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'isOpen', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getUnitOfWork', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getProxyFactory', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'initializeObject', array('obj' => $obj), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'getFilters', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'isFiltersStateClean', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'hasFilters', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return $this->valueHolder86712->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb779e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder86712) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86712 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86712->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, '__get', ['name' => $name], $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        if (isset(self::$publicProperties087b9[$name])) {
            return $this->valueHolder86712->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86712;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86712;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86712;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86712;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, '__isset', array('name' => $name), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86712;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86712;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, '__unset', array('name' => $name), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86712;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86712;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, '__clone', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        $this->valueHolder86712 = clone $this->valueHolder86712;
    }

    public function __sleep()
    {
        $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, '__sleep', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;

        return array('valueHolder86712');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb779e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb779e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb779e && ($this->initializerb779e->__invoke($valueHolder86712, $this, 'initializeProxy', array(), $this->initializerb779e) || 1) && $this->valueHolder86712 = $valueHolder86712;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86712;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86712;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
