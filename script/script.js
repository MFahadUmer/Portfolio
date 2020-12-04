const popUpBox = () => {
  document.getElementById('wrapperPopUpBox').style.display = 'block';
  document.getElementById('popUpBoxCloseButton').addEventListener('click', ()=> {
    document.getElementById('wrapperPopUpBox').style.display = 'none';
  });
};