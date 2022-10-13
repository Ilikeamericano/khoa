<head>
<style>
.selectBox2 * { box-sizing: border-box; }
.selectBox2 {
  position: relative;
  width: 150px;
  height: 35px;
  border-radius: 4px;
  border: 2px solid lightcoral;
  background: url('https://freepikpsd.com/media/2019/10/down-arrow-icon-png-7-Transparent-Images.png') calc(100% - 7px) center no-repeat;
  background-size: 20px;
  cursor: pointer;
}

.selectBox2:after {
  content: '';
  display: block; 
  width: 2px;
  height: 100%; 
  position: absolute; 
  top: 0; 
  right: 35px;
  background: lightcoral;
}

.selectBox2 .label {
  display: flex;
  align-items: center;
  width: inherit;
  height: inherit;
  border: 0 none;
  outline: 0 none;
  padding-left: 15px;
  background: transparent;
  cursor: pointer;
}

.selectBox2 .optionList {
  position: absolute; 
  top: 28px;
  left: 0;
  width: 100%;
  background: lightcoral;
  color: #fff;
  list-style-type: none;
  padding: 0;
  border-radius: 6px;
  overflow: hidden;
  max-height: 0;
  transition: .3s ease-in;
}

.selectBox2 .optionList::-webkit-scrollbar {width: 6px;}
.selectBox2 .optionList::-webkit-scrollbar-track {background: transparent; }
.selectBox2 .optionList::-webkit-scrollbar-thumb {background: #303030; border-radius: 45px;}
.selectBox2 .optionList::-webkit-scrollbar-thumb:hover {background: #303030;}

.selectBox2.active .optionList {
  max-height: 500px;
}

.selectBox2 .optionItem {
  border-bottom: 1px dashed rgb(170, 72, 72);
  padding: 5px 15px 5px;
  transition: .1s;
}

.selectBox2 .optionItem:hover {
  background: rgb(175, 93, 93);
}

.selectBox2 .optionItem:last-child {
  border-bottom: 0 none;
}
</style>

</head>

<body>

<div class="box">
  <select name="fruits" class="select">
    <option disabled selected>fruits 🍊</option>
    <option value="apple">apple</option>
    <option value="orange">orange</option>
    <option value="grape">grape</option>
    <option value="melon">melon</option>
  </select>
</div>

<div class="box">
  <div class="selectBox">
    <select name="fruits" class="select">
      <option disabled selected>fruits 🍊</option>
      <option value="apple">apple</option>
      <option value="orange">orange</option>
      <option value="grape">grape</option>
      <option value="melon">melon</option>
    </select>
    <span class="icoArrow"><img src="https://freepikpsd.com/media/2019/10/down-arrow-icon-png-7-Transparent-Images.png" alt=""></span>
  </div>
</div>

<div class="box">
  <div class="selectBox2 ">
    <button class="label">fruits 🍊</button>
    <ul class="optionList">
      <li class="optionItem">apple</li>
      <li class="optionItem">orange</li>
      <li class="optionItem">grape</li>
      <li class="optionItem">melon</li>
    </ul>
  </div>
</div>

</body>