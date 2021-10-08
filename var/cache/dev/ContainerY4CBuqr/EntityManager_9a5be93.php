<?php

namespace ContainerY4CBuqr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldered55a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7906 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesafa1e = [
        
    ];

    public function getConnection()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getConnection', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getMetadataFactory', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getExpressionBuilder', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'beginTransaction', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getCache', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'transactional', array('func' => $func), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->transactional($func);
    }

    public function commit()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'commit', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->commit();
    }

    public function rollback()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'rollback', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'createQuery', array('dql' => $dql), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'createQueryBuilder', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'flush', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'clear', array('entityName' => $entityName), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->clear($entityName);
    }

    public function close()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'close', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->close();
    }

    public function persist($entity)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'persist', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'remove', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'refresh', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'detach', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'merge', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'contains', array('entity' => $entity), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getEventManager', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getConfiguration', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'isOpen', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getUnitOfWork', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getProxyFactory', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'getFilters', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'isFiltersStateClean', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'hasFilters', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return $this->valueHoldered55a->hasFilters();
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

        $instance->initializerf7906 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldered55a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldered55a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldered55a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, '__get', ['name' => $name], $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        if (isset(self::$publicPropertiesafa1e[$name])) {
            return $this->valueHoldered55a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered55a;

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

        $targetObject = $this->valueHoldered55a;
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
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered55a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldered55a;
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
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, '__isset', array('name' => $name), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered55a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldered55a;
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
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, '__unset', array('name' => $name), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered55a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldered55a;
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
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, '__clone', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        $this->valueHoldered55a = clone $this->valueHoldered55a;
    }

    public function __sleep()
    {
        $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, '__sleep', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;

        return array('valueHoldered55a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf7906 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7906;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf7906 && ($this->initializerf7906->__invoke($valueHoldered55a, $this, 'initializeProxy', array(), $this->initializerf7906) || 1) && $this->valueHoldered55a = $valueHoldered55a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldered55a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldered55a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
