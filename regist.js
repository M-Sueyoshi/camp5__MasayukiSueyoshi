// Requiedで対応
// $(function() {
 
//     // submit()に関数をバインド
//     $('form').submit(function() {
   
//       //must class全部が空白であることを確認してほしいけど。。。。
//         //IDでやるとだめと調べて分かったけどClassもいまいち 最初のをうめればいけてしまう。
//       if($('input[name]').val() == '') {
   
//         // 警告を出す
//         alert('空欄です！');
   
//         // 処理を中断
//         return false;
   
//       }
//     });
//   });
   
// パスワード文字数
// function formCheck(){
//     var flag = 0;
//     var pass_length = document . password . value . length;
//     if ( pass_length < 6 ){
//         flag = 1;
//         document . getElementById( 'notice-input-text-1' ) . innerHTML = 6 -pass_length + "文字不足しています。";
//         document . getElementById( 'notice-input-text-1' ) . style . display = "block";
//     }
//     if ( pass_length  > 20 ){
//         flag = 1;
//         document . getElementById( 'notice-input-text-1' ) . innerHTML = pass_length - 20 + "文字オーバーしています。";
//         document . getElementById( 'notice-input-text-1' ) . style . display = "block";
//     }
//     if( flag ){
//         window . alert( '入力内容に不備があります。' );
//         return false;
//     }else{
//         document . getElementById( 'notice-input-text-1' ) . style . display = "none";
//         return true;
//     }
// }
// -->


    $(function() {
 
        // ①submit()に関数をバインド
        $('form').submit(function() {
       
        // ②ダイアログを出していいえを選択したら…
         if (!confirm('送信しますか？')) {
       
        // 処理を中断
         return false;
       
          }
        });
      });


      
