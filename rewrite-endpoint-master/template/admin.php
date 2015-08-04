<div class=wrap>
	<h2>EP Admin</h2>
	<form method="post" action="options.php">
		<?php settings_fields( 'ep-admin' ); ?>

		Name <input type="text" name="ep-admin-settings[name]" value="">
		Place
		<select name="ep-admin-settings[place]">
			<option value="EP_NONE">なし</option>
			<option value="EP_ALL">全て</option>
			<option value="EP_ROOT">フロントページ</option>
			<option value="EP_PERMALINK">投稿</option>
			<option value="EP_PAGES">固定ページ</option>
			<option value="EP_ATTACHMENT">添付ファイル</option>
			<option value="EP_ALL_ARCHIVES ">アーカイブ</option>
			<option value="EP_DATE">年月アーカイブ</option>
			<option value="EP_YEAR">年別アーカイブ</option>
			<option value="EP_MONTH">月別アーカイブ</option>
			<option value="EP_DAY">日別アーカイブ</option>
			<option value="EP_COMMENTS">コメント</option>
			<option value="EP_SEARCH">検索結果</option>
			<option value="EP_CATEGORIES">カテゴリーアーカイブ</option>
			<option value="EP_TAGS">タグアーカイブ</option>
			<option value="EP_AUTHORS">作成者アーカイブ</option>
			<option value="EP_CUSTOM">カスタム</option>
		</select>
		<input type="text" name="ep-admin-settings[custom]" value="">
		Query var <input type="text" name="ep-admin-settings[query-var]" value="">
		<?php submit_button(); ?>
	</form>
</div>