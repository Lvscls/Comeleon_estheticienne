<?php

namespace ContainerUnADAsQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd567f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer35eca = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f8e7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getConnection', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getMetadataFactory', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getExpressionBuilder', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'beginTransaction', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getCache', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'transactional', array('func' => $func), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->transactional($func);
    }

    public function commit()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'commit', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->commit();
    }

    public function rollback()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'rollback', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getClassMetadata', array('className' => $className), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'createQuery', array('dql' => $dql), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'createNamedQuery', array('name' => $name), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'createQueryBuilder', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'flush', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'clear', array('entityName' => $entityName), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->clear($entityName);
    }

    public function close()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'close', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->close();
    }

    public function persist($entity)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'persist', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'remove', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'refresh', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'detach', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'merge', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'contains', array('entity' => $entity), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getEventManager', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getConfiguration', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'isOpen', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getUnitOfWork', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getProxyFactory', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'initializeObject', array('obj' => $obj), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'getFilters', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'isFiltersStateClean', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'hasFilters', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return $this->valueHolderd567f->hasFilters();
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

        $instance->initializer35eca = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd567f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd567f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd567f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, '__get', ['name' => $name], $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        if (isset(self::$publicProperties2f8e7[$name])) {
            return $this->valueHolderd567f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd567f;

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

        $targetObject = $this->valueHolderd567f;
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
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd567f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd567f;
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
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, '__isset', array('name' => $name), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd567f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd567f;
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
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, '__unset', array('name' => $name), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd567f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd567f;
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
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, '__clone', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        $this->valueHolderd567f = clone $this->valueHolderd567f;
    }

    public function __sleep()
    {
        $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, '__sleep', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;

        return array('valueHolderd567f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer35eca = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer35eca;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer35eca && ($this->initializer35eca->__invoke($valueHolderd567f, $this, 'initializeProxy', array(), $this->initializer35eca) || 1) && $this->valueHolderd567f = $valueHolderd567f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd567f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd567f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
