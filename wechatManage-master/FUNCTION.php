多个职位可以对应一种角色（权限）
权限验证应该微信消息验证一次，修改页面验证一次（如果想做的话）

<!--1.绑定功能-->
<!--    1.新关注用户绑定对应角色 1-->
<!--    -返回状态：成功/失败-->
<!--    2.管理员修改用户角色 2-->
<!--    -返回状态：成功/失败-->
<!--    3.取消绑定角色 3-->
<!--    -返回状态：成功/失败-->
<!---->
<!--2.签到功能-->
<!--    1.进行签到 4-->
<!--    -返回状态：成功/失败-->
<!--    2.查看签到 5-->
<!--    -返回状态：用户所有签到信息-->
<!---->
<!--3.查看用户信息消息及列表 6-->
<!--    -返回状态：所查看的用户信息/权限不足(在职可以)-->

<!--4.请假功能-->
<!--    1.用户申请请假-->
<!--    -返回状态：成功/失败-->
<!--    2.管理员审核请假-->
<!--    -返回状态：通过/不通过-->
<!--    3.用户查看请假状态-->
<!--    -返回状态:通过/不通过-->

<!--5.任务面板-->
<!--    1.管理员后台发布任务（与用户关联）-->
<!--    -返回状态：成功/失败-->
    2.用户查看任务
    -返回状态：简略任务信息
    -链接：全部详情任务列表

6.档案管理
    1.管理员修改在职人员状态
    -返回状态：成功/失败
    2.只有状态“在职”时拥有相应操作权限

7.绩效考核
    -用户所属上级拥有考核权限

8.薪资查看
    -考核计算后的结果