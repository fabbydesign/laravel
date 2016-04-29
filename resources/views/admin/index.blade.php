<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Asociatia Montana Turistmania</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Asociatia Montana Turistmania" />
	<meta name="keywords" content="Asociatia Montana Turistmania" />
	<meta name="robots" content="index,follow" />
        
    <link rel="stylesheet" href="{{ URL::asset('media/css/style.css') }}" />
</head>
    <div class="boxLogin borderRadius">
        {{ Form::open(array('url' => 'admin')) }}
        <?php if($errors->first('email')){?>
        <div class="errors borderRadius"><?=$errors->first('email');?></div>
        <?php } ?>
        <?=Form::label('email', 'E-Mail Address');?>
        <?=Form::text('email', '',array("class"=>'borderRadius'));?>
        <div class="clear"></div>
        <?php if($errors->first('password')){?>
        <div class="errors borderRadius"><?=$errors->first('password');?></div>
        <?php } ?>
        <?=Form::label('password', 'Parola');?>
        <?=Form::password('password',array("class"=>'borderRadius'));?>
        <?=Form::submit('Login',array("class"=>'borderRadius'));?>
        <div class="clear"></div>
        {{ Form::close() }}
    </div>
</body>
</html>
