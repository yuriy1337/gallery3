<? defined("SYSPATH") or die("No direct script access."); ?>
<ul>
  <? foreach ($tags as $tag): ?>
  <li class="size<?=(int)(($tag->count / $max_count) * 7) ?>">
    <span><?= $tag->count ?> photos are tagged with </span>
    <a href="<?=url::site("tags/$tag->id") ?>"><?= $tag->name ?></a>
  </li>
  <? endforeach ?>
</ul>

<? if ($page_type != "tag"): ?>
  <div id="gTagFormContainer">
    <?= tag::get_add_form($item->id) ?>
  </div>
<? endif; ?>

