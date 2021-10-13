<?php

namespace ContainerJcJLJEY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a2e6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4cce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56e4e = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getConnection', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getMetadataFactory', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getExpressionBuilder', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'beginTransaction', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getCache', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'transactional', array('func' => $func), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->transactional($func);
    }

    public function commit()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'commit', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->commit();
    }

    public function rollback()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'rollback', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'createQuery', array('dql' => $dql), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'createQueryBuilder', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'flush', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'clear', array('entityName' => $entityName), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'close', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->close();
    }

    public function persist($entity)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'persist', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'remove', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'refresh', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'detach', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'merge', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'contains', array('entity' => $entity), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getEventManager', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getConfiguration', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'isOpen', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getUnitOfWork', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getProxyFactory', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'getFilters', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'isFiltersStateClean', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'hasFilters', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return $this->valueHolder5a2e6->hasFilters();
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

        $instance->initializerb4cce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a2e6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a2e6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a2e6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, '__get', ['name' => $name], $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        if (isset(self::$publicProperties56e4e[$name])) {
            return $this->valueHolder5a2e6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a2e6;

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

        $targetObject = $this->valueHolder5a2e6;
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
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a2e6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a2e6;
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
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, '__isset', array('name' => $name), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a2e6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a2e6;
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
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, '__unset', array('name' => $name), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a2e6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a2e6;
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
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, '__clone', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        $this->valueHolder5a2e6 = clone $this->valueHolder5a2e6;
    }

    public function __sleep()
    {
        $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, '__sleep', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;

        return array('valueHolder5a2e6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4cce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4cce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4cce && ($this->initializerb4cce->__invoke($valueHolder5a2e6, $this, 'initializeProxy', array(), $this->initializerb4cce) || 1) && $this->valueHolder5a2e6 = $valueHolder5a2e6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a2e6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a2e6;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
