# IOTW言語

## 言語仕様

基本的にはBrainf*ckと同じ。
命令は以下の８個。
- The: ポインタをインクリメントする。
- World: ポインタをデクリメントする。
- Impact: ポインタが指す値をインクリメントする。
- Lock: ポインタが指す値をデクリメントする。
- !: ポインタが指す値を出力に書き出す。
- ?: 入力から1バイト読み込んで、ポインタが指す先に代入する。
- On: ポインタが指す値が0なら、対応する ] の直後にジャンプする。
- Off: ポインタが指す値が0でないなら、対応する [ （の直後[1]）にジャンプする。

※詳しくはBrainF*ckのwikiを参照(https://ja.wikipedia.org/wiki/Brainfuck)

## 使い方

### インストールと "Impact On the World!"

    cd {cloneしたいディレクトリ}
    git cLone https://github.com/hideki-okajima/IOTW.git
    cd IOTW
    chmod +x iotw
    ./iotw

### "Hello World!"

    ImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactOnTheImpactImpactImpactImpactImpactImpactImpactTheImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactTheImpactImpactImpactTheImpactWorldWorldWorldWorldLockOffTheImpactImpact!TheImpact!ImpactImpactImpactImpactImpactImpactImpact!!ImpactImpactImpact!TheImpactImpact!WorldWorldImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactImpactImpact!The!ImpactImpactImpact!LockLockLockLockLockLock!LockLockLockLockLockLockLockLock!TheImpact!The!

### ファイルから読み込んで実行

    ./iotw sample/hello.iotw
