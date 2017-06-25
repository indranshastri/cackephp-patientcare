<style>

@import "compass/css3";

body {
  background: #F0F0F3;
}
.login-box {
  background: #fff;
  border: 1px solid #ddd; 
  margin: 100px 0;
  padding: 40px 20px 0 20px;
}
</style>

<div class="large-3 large-centered columns">
  <div class="login-box">
  <div class="row">
  <div class="large-12 columns">        
    <h3 class="text-center">Patientcare Admin Login</h3>
        <?=$this->Form->create();?>
            <div class="row">
            <?=$this->Form->input('email');?>
            </div>
            <div class="row">
            <?=$this->Form->input('password',["type"=>"password"]);?>
            </div>
            <div class="row">
            <?=$this->Form->submit('Login',["calss"=>"button expand"]);?>
            </div>
        <?=$this->Form->end();?>
    </div>
</div>
</div>
</div>