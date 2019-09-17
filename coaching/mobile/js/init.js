$(function()
{
	//init
	$.fn.formEX = {};

	//form設定
	$.fn.formInit = function(options)
	{
		//オプション
		options = $.extend(
		{
			fomObj : []
		}, options);

		for(var i in options.fomObj)
		{
			switch(options.fomObj[i])
			{
				case 'checkbox': $.fn.formEX.ch = '<label class="cb"><input type="checkbox" name="cb" value=""></label>'; break;
				case 'pulldownVol01': $.fn.formEX.pd = '<select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------">-----------------</option><option value="個別対応（テーラーメード）">個別対応（テーラーメード）</option><option value="継続（オンゴーイング）">継続（オンゴーイング）</option><option value="双方向性（インタラクティブ）">双方向性（インタラクティブ）</option><option value="承認（アクノレッジメント）">承認（アクノレッジメント）</option></select>'; break;
				case 'pulldownVol02sc04': $.fn.formEX.pd = '<select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="YES／NOで答える質問">YES／NOで答える質問</option><option value="自由に答えられる質問">自由に答えられる質問</option></select><select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="YES／NOで答える質問">YES／NOで答える質問</option><option value="自由に答えられる質問">自由に答えられる質問</option></select><select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="どんな症状ですか？">どんな症状ですか？</option><option value="熱はありますか？">熱はありますか？</option></select><select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="どんな症状ですか？">どんな症状ですか？</option><option value="熱はありますか？">熱はありますか？</option></select><select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="事実を明確にさせたいとき">事実を明確にさせたいとき</option><option value="相手に考えさせたいとき">相手に考えさせたいとき</option></select><select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="事実を明確にさせたいとき">事実を明確にさせたいとき</option><option value="相手に考えさせたいとき">相手に考えさせたいとき</option></select><select class="pd" name="pd"><option value="答えを選択してください" selected="selected">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="時間がかかる場合がある">時間がかかる場合がある</option><option value="相手が責められていると感じる場合がある">相手が責められていると感じる場合がある</option></select><select class="pd" name="pd"><option value="答えを選択してください">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="時間がかかる場合がある">時間がかかる場合がある</option><option value="相手が責められていると感じる場合がある">相手が責められていると感じる場合がある</option></select>'; break;
				case 'textarea': $.fn.formEX.ta = '<input type="text" name="ta" value="" class="ta">'; break;
				case 'textareaL': $.fn.formEX.taL = '<textarea name="taL" rows="4" cols="40" class="taL" ></textarea>'; break;
				
				case 'pulldowntext': $.fn.formEX.pdta = '<select class="pdta" name="pd"><option value="答えを選択してください">答えを選択してください</option><option value="-----------------------------">-----------------------------</option><option value="アナライザー">アナライザー</option><option value="プロモーター">プロモーター</option><option value="コントローラー">コントローラー</option><option value="サポーター">サポーター</option></select><textarea name="pt" rows="4" cols="40" class="pdta" ></textarea>'; break;
			}
		}//end for
		$.fn.formEX.tg = $('#form');
	}
	$.fn.formHide = function()
	{//非表示
		$.fn.formEX.tg.hide();
	};
	$.fn.formShow = function()
	{//表示
		$.fn.formEX.tg.show();
	};

	//stage set
	$.fn.formEX.s = new swiffy.Stage(document.getElementById('cont'),so);
});
