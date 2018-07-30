var count = 1;

var input = prompt("Please enter something");

while (!/[a-zA-Z!@#$%^&*()-={}';~|\]\[\"]+\s/.test(input) && count < 10){
  count += 1;
  input = prompt("Please enter something");
}

if (count == 10){
  document.getElementById('statsOut').innerHTML = "You have exceeded invalid entry limit.";
} else {
  var content = input.match(/[a-zA-Z!@#$%^&*()-={}';~|\]\[\"]+\s/);
  var print = "";

  var vowels = 0;

  for (var i = 0; i < content[0].length; i++){
    if ((/[a-zA-Z]/).test(content[0].charAt(i))){
      print += content[0].charAt(i);
      if(/[aeiou]/.test(content[0].charAt(i))){
        vowels += 1;
      };
      // console.log(content[0].charAt(i));
    };
  };
  // console.log(vowels);

  if (/\s/.test(input)){
    document.getElementById('statsOut').innerHTML = "Your text is: " + print +
    "</br>The total number of vowels are: " + vowels;
  };
}
