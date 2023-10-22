
public static void name() {
    
}
class OuterClass {
 int x = 10;
 static class InnerClass {
 int y =20;
 }
}
public class Main {
 public static void main(String[] args) {
 OuterClass.InnerClass Inner = new OuterClass.InnerClass();
 System.out.println(Inner.y);
 }
}
