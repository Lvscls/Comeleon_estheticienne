<?php

namespace ContainerLEIknp8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfcc34 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8b467 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7e1e = [
        
    ];

    public function getConnection()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getConnection', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getMetadataFactory', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getExpressionBuilder', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'beginTransaction', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getCache', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'transactional', array('func' => $func), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->transactional($func);
    }

    public function commit()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'commit', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->commit();
    }

    public function rollback()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'rollback', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getClassMetadata', array('className' => $className), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'createQuery', array('dql' => $dql), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'createNamedQuery', array('name' => $name), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'createQueryBuilder', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'flush', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'clear', array('entityName' => $entityName), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->clear($entityName);
    }

    public function close()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'close', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->close();
    }

    public function persist($entity)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'persist', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'remove', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'refresh', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'detach', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'merge', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'contains', array('entity' => $entity), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getEventManager', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getConfiguration', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'isOpen', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getUnitOfWork', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getProxyFactory', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'initializeObject', array('obj' => $obj), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'getFilters', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'isFiltersStateClean', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'hasFilters', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return $this->valueHolderfcc34->hasFilters();
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

        $instance->initializer8b467 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfcc34) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfcc34 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfcc34->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, '__get', ['name' => $name], $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        if (isset(self::$publicPropertiese7e1e[$name])) {
            return $this->valueHolderfcc34->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcc34;

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

        $targetObject = $this->valueHolderfcc34;
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
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcc34;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfcc34;
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
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, '__isset', array('name' => $name), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcc34;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfcc34;
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
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, '__unset', array('name' => $name), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcc34;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfcc34;
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
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, '__clone', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        $this->valueHolderfcc34 = clone $this->valueHolderfcc34;
    }

    public function __sleep()
    {
        $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, '__sleep', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;

        return array('valueHolderfcc34');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8b467 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8b467;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8b467 && ($this->initializer8b467->__invoke($valueHolderfcc34, $this, 'initializeProxy', array(), $this->initializer8b467) || 1) && $this->valueHolderfcc34 = $valueHolderfcc34;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfcc34;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfcc34;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
