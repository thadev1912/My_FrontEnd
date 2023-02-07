function animateNumber(finalNumber, delay, startNumber = 0, callback) {
  let currentNumber = startNumber
  const interval = window.setInterval(updateNumber, delay)
  function updateNumber() {
    if (currentNumber >= finalNumber) {
      clearInterval(interval)
    } else {
      currentNumber++
      callback(currentNumber)
    }
  }
}

document.addEventListener('DOMContentLoaded', function () {
  
  
  animateNumber(170, 50, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count1').innerText = formattedNumber+'    '+'mét'
  })
  
  animateNumber(400, 50, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count2').innerText = formattedNumber+'    '+'mét'
  })
  animateNumber(750, 50, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count3').innerText = formattedNumber+'    '+'mét'
  })
  animateNumber(500, 50, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count4').innerText = formattedNumber+'    '+'mét'
  })
  animateNumber(900, 50, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count5').innerText = formattedNumber+'    '+'mét'
  })
  animateNumber(900, 50, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count6').innerText = formattedNumber+'    '+'mét'
  })
})