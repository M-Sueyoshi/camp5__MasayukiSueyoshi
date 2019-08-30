

package com.company.practice;

import java.util.Scanner;

public class test {
    public static void main(String[] args) {
//        診断ツール
        String[] qes = new String[5];
//        ここでString内に質問を入れる
        qes[0] = "犬よりは猫派？";
        qes[1] = "外より家派？";
        qes[2] = "日本最高？";
        qes[3] = "美味しいものを食べるなら遠くまで行く？";
        qes[4] = "お酒はあまり飲まない？";


        String[] choice = new String[4];
//        ここで回答の選択肢を入れる
        choice[0] = "1. あてはまらない";
        choice[1] = "2. あまりあてはまらない";
        choice[2] = "3. まあまああてはまる";
        choice[3] = "4. あてはまる";
//        選択肢をchoiceに格納
        int ttl = 0;
        for (int i =0; i<5; i++){
            System.out.println((i+1)+"問目"+qes[i]);
//            質問を順番に表示
            for(int s =0; s<4; s++){
                if (s < 3) {
                    System.out.print(choice[s]);
//                3回目まではprintで選択しを表示
                }else{
//                4回目はprintlnと答えを打つ場所を入れる
                    System.out.println(choice[s]);
                    System.out.println("1~4で答えてください！");
                    Scanner scanner = new Scanner(System.in);
//                    答えを入れておく変数
                    int ans= scanner.nextInt();
                    ttl += ans;
                }
            }
        }

//        ここまででアンケート終わり
//        ここから相性計算

        if(ttl< 6){
            System.out.println("結婚してください!!");
        }else if(ttl <10){
            System.out.println("好きです!付き合ってください！");
        }else if(ttl < 15){
            System.out.println("これからも仲良くしてください");
        }else{
            System.out.println("これから仲良くしてください");
        }
    }
}
