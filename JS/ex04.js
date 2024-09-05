const random_hex_color_code = () => {
    let n = (Math.random() * 0xffffff * 1000000).toString(16);
    return '#' + n.slice(0, 6);};
 
  const randomColor = random_hex_color_code();
  document.write(randomColor)
 

  const myBox = document.getElementById("myBox");
 

  myBox.style.width = "100px";
  myBox.style.height = "100px";
  myBox.style.backgroundColor = randomColor;
 