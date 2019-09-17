<?php
########################################################
###
###	問診コーチング　リファレンスURL
###	reference_code.inc.php
###	insert date	2014/02/04
###	modify date	2014/03/11
###	version		0.02
###
########################################################

###
###	定義
###

$category = array (
	'osusume1' => 1, ##おすすめコンテンツ
	'osusume2' => 2, ##おすすめ書籍
	'osusume3' => 3, ##おすすめサイト
	'osusume4' => 4, ##おすすめメールマガジン
	'tips1'    => 5  ##TIPS リンク1
);

$reference = array (
	1 =>  array (
		'01' => array (
			$category['osusume1'] => array (
				'title' => 'eコーチングプログラム　60日間メールでコーチングを受ける',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=101'
			),
			$category['osusume2'] => array (
				'title' => '『コーチング・マネジメント』　伊藤守著（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/knowledge/coaching-management.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'02' => array (
			$category['osusume1'] => array (
				'title' => 'Test.jp　さまざまなテストでタイプがわかる　タイプわけのアセスメントもこちらで無料で試せます！',
				'url' => 'http://test.jp/'
			),
			$category['osusume2'] => array (
				'title' => '『図解　コーチング流　タイプ分けを知ってアプローチするとうまくいく』　鈴木義幸著（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/coaching-skill/type.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　　CTP(コーチ・トレーニング・プログラム)　コーチングとは：コーチングの３原則　「テーラーメイド」',
				'url' => 'http://www.coach.co.jp/coaching/base01.html'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'03' => array (
			$category['osusume1'] => array (
				'title' => '６０日で６０個のコーチングスキルを身につけるメールコーチング　eコーチング「コーチングスキル」',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=235'
			),
			$category['osusume2'] => array (
				'title' => '『コーチングが人を活かす』　鈴木義幸著（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/knowledge/coching-use.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			),
			$category['tips1'] => array (
				'title' => 'コーチングの歴史',
				'url' => 'http://www.coach.co.jp/coaching/history.html'
			)
		),
		'04' => array (
			$category['osusume1'] => array (
				'title' => 'コーチの強い味方！　質問のレパートリーが広がるクエスチョン・パートナー',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=108'
			),
			$category['osusume2'] => array (
				'title' => '『コーチングのプロが使っている　質問力ノート』　ルパート・イールズ-ホワイト著（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/coaching-skill/right-question.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチヴィル　Daily　Question',
				'url' => 'http://www.coachville.co.jp/
	'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'05' => array (
			$category['osusume1'] => array (
				'title' => 'コミュニケーション・インベントリー(Test.jp)',
				'url' => 'http://test.jp/'
			),
			$category['osusume2'] => array (
				'title' => '『もしもうさぎにコーチがいたら』　伊藤守 著（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/knowledge/moshiusa2.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチングに関するイメージ調査　コーチング/カウンセリング/コンサルティングの違い',
				'url' => 'http://www.coach.co.jp/coaching/difference.html'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'06' => array (
			$category['osusume1'] => array (
				'title' => '聞くスキル(Test.jp)',
				'url' => 'http://test.jp'
			),
			$category['osusume2'] => array (
				'title' => '『コーポレート・コーチ』　伊藤 守　編・著（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/management/corporate-coach.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'07' => array (
			$category['osusume1'] => array (
				'title' => '会話を広げるコミュニケーション力を磨くためのメールコーチングコース　eコーチング「コミュニケーションスキル・スペシャルセット」',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=223'
			),
			$category['osusume2'] => array (
				'title' => '『コーチング選書３　人を動かす５０の物語』　著者　M.パーキン（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/pro-coach/coaching03.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'08' => array (
			$category['osusume1'] => array (
				'title' => 'ヴィル＋eコーチングスペシャルセット「コーチングスキル・スペシャルセット」',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=214'
			),
			$category['osusume2'] => array (
				'title' => '『コーチングのプロが教える「ほめる」技術』　著者　鈴木義幸（日本実業出版社刊）',
				'url' => 'http://www.coacha.com/book/coaching-skill/homeru.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'09' => array (
			$category['osusume1'] => array (
				'title' => 'ｅコーチング・プログラム　朝届く１通のメールがあなたのコーチになる！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=101'
			),
			$category['osusume2'] => array (
				'title' => '『コーチング選書５　コーチング・マニュアル』　著者　S.ソープ＆J.クリフォード',
				'url' => 'http://www.coacha.com/book/pro-coach/coaching05.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'10' => array (
			$category['osusume1'] => array (
				'title' => '好感度チェック (Test.jp)',
				'url' => 'http://test.jp/'
			),
			$category['osusume2'] => array (
				'title' => '『コーチングのプロが教えるプレゼンスマネジメント』　著者　鈴木義幸（日経BP社刊）',
				'url' => 'http://www.coacha.com/book/coaching/presence-management.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'11' => array (
			$category['osusume1'] => array (
				'title' => '聞いて学ぶ「ゲストコーチシリーズ」',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=103'
			),
			$category['osusume2'] => array (
				'title' => '『コミュニケーションはキャッチボール』　著者　伊藤 守（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/coaching/Communication-is-like-playing-catch.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'12' => array (
			$category['osusume1'] => array (
				'title' => 'ｅコーチング・プログラム　朝届く１通のメールがあなたのコーチになる！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=101'
			),
			$category['osusume2'] => array (
				'title' => '『図解　コーチングスキル』　著者　鈴木 義幸（ディスカヴァー・トゥエンティワン刊）',
				'url' => 'http://www.coacha.com/book/coaching-skill/coaching-skill.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		)
	),
	2 =>  array (
		'01' => array (
			$category['osusume1'] => array (
				'title' => 'クエスチョン・パートナー　プロのコーチが使う質問がいますぐ手に入る！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=108'
			),
			$category['osusume2'] => array (
				'title' => '『会話から始めるコーチング‐最強のチームをつくるコミュニケーション力』　著者　伊藤守（大和書房刊）　コーチングのエッセンスを軽やかに学ぶ',
				'url' => 'http://www.coacha.com/book/knowledge/conversation-coaching.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチング研究所　コーチングに関するリサーチならここ！',
				'url' => 'http://crillp.com/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'02' => array (
			$category['osusume1'] => array (
				'title' => '３０のキーワードで学ぶコーチング　３０個のコーチング用語がわかりやすく整理されています',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=227'
			),
			$category['osusume2'] => array (
				'title' => '『コーチング選書４　戦略的質問７８』　具体的な質問の視点が学べる一冊',
				'url' => 'http://www.coacha.com/book/pro-coach/coaching04.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチングストア',
				'url' => 'http://aaa.coach.co.jp/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'03' => array (
			$category['osusume1'] => array (
				'title' => 'ｅコーチング『読んで学ぶコーチング』　１０週にわたり 、毎週月・水・金の３回、メールでコーチ型コミュニケーションを学ぶ',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=239'
			),
			$category['osusume2'] => array (
				'title' => '『絵で学ぶコーチング』　伊藤守著　（日本経団連出版刊）　絵とイメージの沸く文章でコーチングのエッセンスを学ぶ１冊',
				'url' => 'http://www.coacha.com/book/coaching-skill/coaching-skill50.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチヴィル',
				'url' => 'http://www.coachville.co.jp/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'04' => array (
			$category['osusume1'] => array (
				'title' => 'ヴィル＋Eコーチングスペシャルセット　eメールとPDF資料でスキルアップ！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=104'
			),
			$category['osusume2'] => array (
				'title' => '『事例で明解　ビジネス現場のコーチング活用法』　桜井一紀／日経情報ストラテジー編',
				'url' => 'http://www.coacha.com/book/management/business-coaching.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチヴィル',
				'url' => 'http://www.coachville.co.jp/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'05' => array (
			$category['osusume1'] => array (
				'title' => 'コーチヴィルPACK　コーチングKITを使って継続的にパフォーマンスアップ！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=100'
			),
			$category['osusume2'] => array (
				'title' => '『コーチングのプロが教える質問の技術』　齊藤淳子／ダイヤモンド社',
				'url' => 'http://www.coacha.com/book/coaching-skill/question.html'
			),
			$category['osusume3'] => array (
				'title' => 'コーチヴィル',
				'url' => 'http://www.coachville.co.jp/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'06' => array (
			$category['osusume1'] => array (
				'title' => 'ｅコーチング・プログラム　朝届く１通のメールがあなたのコーチになる！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=101'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'07' => array (
			$category['osusume1'] => array (
				'title' => '聞いて学ぶ「ゲストコーチシリーズ」　聞くスキルを上げる',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=259'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'08' => array (
			$category['osusume1'] => array (
				'title' => '聞いて学ぶ「ゲストコーチシリーズ」　話すスキルをあげる～印象的なスピーチを創り上げる方法',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=268'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'09' => array (
			$category['osusume1'] => array (
				'title' => 'ワークブックを使ってセルフマネジメントを強化　タイプ分け for Coaching',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=110'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'10' => array (
			$category['osusume1'] => array (
				'title' => 'コーチヴィルPACK「コミュニケーションのスキルアップ」コミュニケーションをスキルアップするKITセット',
				'url' => 'http://aaa.coach.co.jp/products/prod_det.php?prod_c=116'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'11' => array (
			$category['osusume1'] => array (
				'title' => 'クエスチョン・パートナー　効果的な質問をセルフコーチングに！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=108'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		),
		'12' => array (
			$category['osusume1'] => array (
				'title' => 'ｅコーチング・プログラム　朝届く１通のメールがあなたのコーチになる！',
				'url' => 'http://aaa.coach.co.jp/products/list_catg.php?prodcatg=101'
			),
			$category['osusume2'] => array (
				'title' => 'おすすめの本一覧　コーチングに関連するお勧め書籍を一覧できます',
				'url' => 'http://www.coacha.com/book/'
			),
			$category['osusume3'] => array (
				'title' => 'コーチ・エィ　CTP(コーチ・トレーニング・プログラム)　コーチングとは',
				'url' => 'http://www.coach.co.jp/coaching/'
			),
			$category['osusume4'] => array (
				'title' => '『WEEKLY GLOBAL COACH』',
				'url' => 'http://www.coacha.com/wc/'
			)
		)
	)
);

################################################################################
1;

?>
