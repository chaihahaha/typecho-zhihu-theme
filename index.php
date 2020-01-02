<?php
/**
 * 在 Typecho 0.9 系统默认皮肤基础上修改
 * Copyright: Shitong CHAI
 * @package Typecho Replica Theme 
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
        <?php $i=0; ?>
	<?php while($this->next()): ?>
        <?php $i++ ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div id="article<?php echo $i ?>" class="post-content" itemprop="articleBody" onclick="displayNext(this);" style="cursor: pointer;">
                        <?php $this->excerpt(200, '...'); ?>
                        <p class="more" style="color:#175199;cursor: pointer;">展开阅读</p>
            </div>
            <div id="hiddenarticle<?php echo $i ?>" class="hidden-post-content" itemprop="articleBody-hidden" style="display: none">
                        <?php $this->content(false); ?> 
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
