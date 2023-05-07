document.getElementById("calculateBtn").addEventListener("click", function() {
    var weight = document.getElementById("weightInput").value;
    var height = document.getElementById("heightInput").value;
    var bmi = weight / (height * height);
    document.querySelector(".result").innerHTML = "Your BMI is: " + bmi.toFixed(2);
});