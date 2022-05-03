<?php

namespace ContainerHcnO6Os;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder98196 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6b5a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties78272 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getConnection', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getMetadataFactory', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getExpressionBuilder', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'beginTransaction', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getCache', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'transactional', array('func' => $func), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'commit', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->commit();
    }

    public function rollback()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'rollback', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getClassMetadata', array('className' => $className), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'createQuery', array('dql' => $dql), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'createNamedQuery', array('name' => $name), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'createQueryBuilder', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'flush', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'clear', array('entityName' => $entityName), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->clear($entityName);
    }

    public function close()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'close', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->close();
    }

    public function persist($entity)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'persist', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'remove', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'refresh', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'detach', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'merge', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'contains', array('entity' => $entity), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getEventManager', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getConfiguration', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'isOpen', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getUnitOfWork', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getProxyFactory', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'initializeObject', array('obj' => $obj), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'getFilters', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'isFiltersStateClean', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'hasFilters', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return $this->valueHolder98196->hasFilters();
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

        $instance->initializer6b5a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder98196) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder98196 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder98196->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, '__get', ['name' => $name], $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        if (isset(self::$publicProperties78272[$name])) {
            return $this->valueHolder98196->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98196;

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

        $targetObject = $this->valueHolder98196;
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
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98196;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder98196;
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
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, '__isset', array('name' => $name), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98196;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder98196;
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
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, '__unset', array('name' => $name), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98196;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder98196;
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
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, '__clone', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        $this->valueHolder98196 = clone $this->valueHolder98196;
    }

    public function __sleep()
    {
        $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, '__sleep', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;

        return array('valueHolder98196');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6b5a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6b5a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6b5a3 && ($this->initializer6b5a3->__invoke($valueHolder98196, $this, 'initializeProxy', array(), $this->initializer6b5a3) || 1) && $this->valueHolder98196 = $valueHolder98196;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder98196;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder98196;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
