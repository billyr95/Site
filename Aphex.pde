PImage img;

void setup() {
 size(900, 900, P3D); 
 img= loadImage("images/ISIWeb/Aphex.png");
 img.resize(900,900);
}

void draw() {
  background(#f1f1f1);
  fill(0);
  noStroke();
  
  float tiles = 80;
  float tileSize = width/tiles;
  
  for (int x = 0; x < tiles; x++){
   for (int y = 0; y < tiles; y++){
   
     ellipse(x * tileSize,y*tileSize, 10,10);
     
   }
  }
}
