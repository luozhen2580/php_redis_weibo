<? if(!defined('IN_APP')) exit('Access Denied'); include template('header'); ?>
    <div class="container">
<div class="user_nav pull-right"><? if($user['uid']) { ?><p> 欢迎 <span class="label label-success"><?=$user['username']?></span> ，<a href="?c=user&a=logout">退出</a>  </p><? } else { ?>  <a type="button" class="btn btn-default" role="button" href="?c=user&a=login">登录</a>
  <a type="button" class="btn btn-default" role="button" href="?c=user&a=register">注册</a><? } ?></div>
      <div class="header">
<h3 class="text-muted"><a style="vertical-align: bottom;" href="<?=SITE_URL?>">简单微博系统</a></h3>
      </div><? if($user['uid']) { ?><form class="form-inline" role="form" method="post" action="?c=index&a=post">
     <label class="sr-only" for="weiboContent">新鲜事:</label>
    <input type="text" class="form-control" id="weiboContent" name="content" size="120" placeholder="">
    <button type="submit" name="submit" class="btn btn-default">发布</button>
</form><? } ?><hr />
 
 
<? if(is_array($postList)) { foreach($postList as $post) { ?>
<div class="col-md-10 media">
        <a class="pull-left" href="?c=user&a=space&uid=<?=$post['user']['uid']?>">
          <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABN0lEQVR4Xu2YQQ6EIAxFdeXFODZnYu9qJk5C0sGiUiAx8FyKVPr76VPWEMJnmfhaEQAHsAXoARP3wIUmCAWgABSAAlBgYgXAIBgEg2AQDE4MAX6GwCAYBINgEAyCwYkVAIO1GPTe//nHOXfyU3xGG9PM1yNmzuRVDpCJ5ZKUyTwRoEfMqx3eTIBcJbdtW/Z9/w2XCtAqZncB5Atkkkc1NQFileVYFCi1fypcLqa1jzd1QM6+2va4EycKWRLTIkI3AY7FPKmmVmF5LxXvLmapCF0FiItp5QCZXClZulBAq/IVBtN9rvUAa8zSysfnqxxgfemb5iFA7Zfgm6ppWQsOwAEciXEkxpGYpXuOMgcKQAEoAAWgwCgd3ZIHFIACUAAKQAFL9xxlDhSAAlAACkCBUTq6JY/pKfAFwO6XkLwNdToAAAAASUVORK5CYII=" style="width: 64px; height: 64px;">
        </a>
        <div class="media-body">
          <a href="?c=user&a=space&uid=<?=$post['user']['uid']?>"><h4 class="media-heading text-primary"><?=$post['user']['username']?></h4></a>
          <p><?=$post['content']?></p>
         <div class="row">
         	<div class="col-md-2"><span class="text-muted"><?=$post['format_dateline']?></span></div>
           	<div class="col-md-1 col-md-offset-10"><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a> </div>
         	<div class="col-md-1"><span class="text-muted"><a href="#"><span class="glyphicon glyphicon-thumbs-down"></span></a> </span></div>
         </div>
        </div>
      </div>
<? } } ?>
 


<div class="clearfix" ></div>
<? include template('footer'); ?>
