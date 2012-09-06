<?php

namespace Kunstmaan\AdminBundle\Tests\Permission;

use Kunstmaan\AdminBundle\Permission\PermissionAdmin;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-29 at 11:36:29.
 */
class PermissionAdminTest extends \PHPUnit_Framework_TestCase
{
    protected $mockEntityManager;
    protected $mockSecurityContext;
    protected $mockAclProvider;
    protected $mockOidRetrievalStrategy;
    protected $mockKernel;

    /**
     * @var PermissionAdmin $object
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->mockEntityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockSecurityContext = $this->getMock('Symfony\Component\Security\Core\SecurityContextInterface');
        $this->mockAclProvider = $this->getMock('Symfony\Component\Security\Acl\Model\AclProviderInterface');
        $this->mockOidRetrievalStrategy = $this->getMock('Symfony\Component\Security\Acl\Model\ObjectIdentityRetrievalStrategyInterface');
        $this->mockKernel = $this->getMock('Symfony\Component\HttpKernel\KernelInterface');

        $this->object = new PermissionAdmin($this->mockEntityManager, $this->mockSecurityContext, $this->mockAclProvider, $this->mockOidRetrievalStrategy, $this->mockKernel);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::initialize
     * @todo   Implement testInitialize().
     */
    public function testInitialize()
    {
/*
        $resource = $this->getMock('Symfony\Component\Security\Acl\Model\DomainObjectInterface');

        $objectIdentity = $this->getMock('Symfony\Component\Security\Acl\Model\ObjectIdentityInterface');
        $permissionMap = $this->getMock('Kunstmaan\AdminBundle\Component\Security\Acl\Permission\PermissionMap');

        $acl = $this->getMock('Symfony\Component\Security\Acl\Model\AclInterface');

        $this->mockAclProvider
            ->expects($this->once())
            ->method('findAcl')
            ->will($this->returnValue($acl));

        $this->mockOidRetrievalStrategy
            ->expects($this->once())
            ->method('getObjectIdentity')
            ->will($this->returnValue($objectIdentity));

        $this->object->initialize($resource, $permissionMap, null);
*/
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::getPermissions
     * @todo   Implement testGetPermissions().
     */
    public function testGetPermissions()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::getPermission
     * @todo   Implement testGetPermission().
     */
    public function testGetPermission()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::getAllRoles
     * @todo   Implement testGetAllRoles().
     */
    public function testGetAllRoles()
    {
        $roleRepo = $this->getMockBuilder('Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $roleRepo->expects($this->once())
            ->method('findAll')
            ->will($this->returnValue(null));

        $this->mockEntityManager
            ->expects($this->once())
            ->method('getRepository')
            ->with('KunstmaanAdminBundle:Role')
            ->will($this->returnValue($roleRepo));

        $this->assertNull($this->object->getAllRoles());
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::getPossiblePermissions
     * @todo   Implement testGetPossiblePermissions().
     */
    public function testGetPossiblePermissions()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::bindRequest
     * @todo   Implement testBindRequest().
     */
    public function testBindRequest()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kunstmaan\AdminBundle\Permission\PermissionAdmin::applyAclChangeset
     * @todo   Implement testApplyAclChangeset().
     */
    public function testApplyAclChangeset()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
