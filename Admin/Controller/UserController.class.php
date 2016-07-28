<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
use Org\Util\Rbac;

//后台用户管理控制器
class UserController extends AuthController{
    //角色模型
    private $_role = NULL;
    //用户模型
    private $_user = NULL;
    public function __construct(){
        parent::__construct();
        
        $this->assign('title', '用户管理');
        
        $this->_role = D('role');
        $this->_user = D('user');
    }
    
    //添加新的管理员
    public function add_new_user(){
        if(!IS_AJAX){
            //获取所有的角色
            $roleList = $this->_role->field_array('id,name');
           
            $this->assign('pageTitle', '添加用户');
            $this->assign('pageDesc', '添加新的后台管理用户，并给新用户分配相应的角色!');      
            
            $this->assign('roleList', $roleList);
            $this->display();
        }else{
            $data = array();
            if(!($error = $this->_user->add_user(I('post.')))){
                $data['res'] = false;
                $data['msg'] = $this->_user->getError();
            }else{
                $data['res'] = true;
            }
            $this->ajaxReturn($data);
        }
    }
    
    //管理员列表
    public function user_list(){
        
        //按条件搜索
        $search = I('post.search'); 
        
        //分页
        $nowPage = I('post.nowPage')?I('post.nowPage'):1;
        $perPage = I('post.perPage')?I('post.perPage'):2;
        
        //排序
        $where = NULL;
        if($search){
            $where = array(
                'username' => array('like','%'.$search.'%'),
                '_logic' => 'or',
                'name' => array('like','%'.$search.'%'),
                '_logic' => 'or',
                'email' => array('like','%'.$search.'%'),
                '_logic' => 'or',
/*                 'create_time' => array('eq',mktime($search)),
                '_logic' => 'or',
                'login_time' => array('eq',mktime($search)),
                '_logic' => 'or', */
                'login_ip' => array('like','%'.$search.'%'),
                '_logic' => 'or',
                'login_count' => array('like','%'.$search.'%')
                //'_logic' => 'OR'
            );
        }  
        $totalRecord = $this->_user->total_record($where); 
        
        //按条件显示用户列表
        $condition = array(
            'page' => $nowPage,
            'limit' => $perPage,
            'field' =>array(//用户名、角色名、邮箱、创建时间、上次登陆时间、上次登陆IP、状态、登陆次数
                'shop_user.id',
                'shop_user.username',
                'shop_user.password',
                'shop_role.name' => 'role',
                'shop_role.id' => 'rid',
                'shop_user.email',
                'from_unixtime(shop_user.create_time,"%Y-%m-%d") as create_time',
                'from_unixtime(shop_user.login_time,"%Y-%m-%d") as login_time',
                'shop_user.login_ip',
                'shop_user.status',
                'shop_user.login_count'
            ),
            'order' => array(
                'login_time' => 'desc',
            ),
            'join' => 'LEFT JOIN shop_role_user ON shop_user.id = shop_role_user.user_id',
            'Join' => 'LEFT JOIN shop_role ON shop_role_user.role_id = shop_role.id'
        );
        $condition['where'] = $where;
        
        //用户列表
        $userList = $this->_user->user_list($condition);  
        
        //var_dump($userList);exit;
        //判断是否是最后一页
        $LastPage = ceil($totalRecord/$perPage)?ceil($totalRecord/$perPage):1;
       
        if(!IS_AJAX){                
                
                $this->assign('tableTitle', $this->_user->tableTitle);
                
                //角色列表
                $roleList = $this->_role->role_list();  
                array_unshift($roleList, ['id'=>0,'name'=>'--请选择角色--']);
                $this->assign('roleList',$roleList);
                
                $this->assign('userList',$userList);
                $this->assign('pageTitle', '管理员列表');
                $this->assign('pageDesc', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx!');  
                
                //分页
                $this->assign('lastpage',$LastPage);
                $this->assign('nowpage',$nowPage);
                $this->assign('perpage',$perPage);
                $this->assign('totalrecord',$totalRecord);
                
                $this->display();
            }else{
        
                $data['data'] = $userList;
                $data['nowPage'] = $nowPage;
                $data['perPage'] = $perPage;
                $data['lastPage'] = $LastPage;
                $data['totalRecord'] = (int)$totalRecord;
                
                $this->ajaxReturn($data);
            }
    }

    //改变用户的状态
    public function changeStatus(){
        $uid = I('post.uid');
        $status = I('post.status');
        
        $res = $this->_user->change($uid,$status);
        if($res){
            $this->ajaxReturn(['res'=>true]);
        }else{
            $this->ajaxReturn(['res'=>false]);
        }
    }
    
    //保存用户的修改信息
    public function saveUser(){
        $user = I('post.user');
        
        $data['id'] = $user['id'];
        $data['password'] = $user['password']?$user['password']:$user['username'];
        $data['email'] = $user['email'];
        $data['rid'] = $user['rid'];
        
        $res = $this->_user->saveUser($data);
        if($res){
            $this->ajaxReturn(['res'=>true]);
        }else{
            $this->ajaxReturn(['res'=>false]);
        }
    }
    
    //删除某个用户
    public function delUser(){
        //带完成
    }
    
    //添加新的角色
    public function add_new_role(){
        echo '待完成';
    }
   
    //角色列表
    public function role_list(){
        echo '待完成';
    }
    
    //添加新的权限
    public function add_new_node(){
        echo '待完成';
    }
    
    //权限列表
    public function node_list(){
        echo '待完成';
    }
}