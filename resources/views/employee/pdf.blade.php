<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0;}
	.tg td{font-family:Arial, sans-serif;font-size:10px;padding-left: 2px; border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
	.tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding-left: 2px; border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
	.tg .tg-yw4l{vertical-align:top}
	.resp-image { position: absolute; right: 0px; width: 300px; padding: 1px; } 
  .noborder{ border:none; }
  .headerCenter{ text-align: center; font-family:Arial, sans-serif;font-size:10px; font-weight: bold; }
  .headertop{ text-align: center; }
  .content > div > span{
    display:inline-block;
    width:20%; /* or choose some other value */
  }

  table {
    table-layout: fixed;
    width: 100%;
    border-collapse: collapse;
    border: 1px;
    font-family:Arial, sans-serif;font-size:10px;
  }

</style>

</head>
<body>
	<h3 style="font-family:Arial, sans-serif;font-size:18px;"><u>WELCOME TO COMMUNITY TAX!</u></h3>
	<table cellpadding="5">
		<tr>
			<th><b>Full Name: {{ $employee->name }} </b></th>
			<th rowspan="2"> <img src="img/logo.png" class="resp-image"></th>
		</tr>

		<tr><th><b>Assignment: {{ $employee->location }} </b></th>
		</tr>

		<tr>
			<th><b>You Start On: {{ $employee->start_date }} </b></th>
		</tr>

		<tr>
			<th><b>Your new email: {{ $employee->email }} </b></th>
		</tr>
	</table>
	<table class="tg">
		<tr>
			@if($employee->did == '')
			<th colspan="2"><b>Your Direct Line is: &nbsp;&nbsp; N/A &nbsp;&nbsp; Your Extension is: &nbsp;&nbsp; {{ $employee->ext }} </b></th>
			@else
			<th colspan="2"><b>Your Direct Line is: &nbsp;&nbsp; {{ $employee->did }} &nbsp;&nbsp; Your Extension is: &nbsp;&nbsp; {{ $employee->ext }} </b></th> 
			@endif
		</tr>
	</table>

	<table class="tg">
		<tbody>
			<tr>
				<td rowspan="3" width="70%" valign="top">
          <b><u>USERNAMES AND PASSWORDS</u></b><br/>
          <b>(THIS INFORMATION IS CONFIDENTIAL)</b><br/><br/>
          <b><u>Network Account</u><b/><br/>
            <b>Username: {{ $employee->network_account }} <b/><br/>
              <b>Password: {{ $employee->accounts->where('employee_id', $employee->id)->where('type_account', 'Personal Account')->first()->password }} <b/><br/>
              </td>
              <td class="headerCenter">Domain: CTR</b></td>
            </tr>
            <tr>
             <td class="headerCenter"><b><u>Upon First Login use:</u></b></td>
           </tr>
           <tr style="border-bottom: 5px solid #FCFCBC;">
             <td> <b> Username: {{ $employee->network_account }} <br/> 
              Password: {{ $employee->accounts->where('employee_id', $employee->id)->where('type_account', 'Personal Account')->first()->password }}  </b> </td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px;"><u><b>IRS Logics (CRM)</b></u></td>
              <td style="width: 50%; padding-left: 5px;"><a href="#">http://ctrtaxtool.com</a></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="3" ><p class="headertop">Logics is our Customer Relationship Manager (CRM) software</p></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px;"><b>Username:</b></td>
              <td style="width: 30%; padding-left: 5px;"><b>{{ $employee->email }}</b></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px;"><b>Password:</b></td>
              <td style="width: 30%; padding-left: 5px;"><b>please see your email from ctr.postman@postman.io</b></td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px;" colspan="2"><u><b>Outlook (EMAIL)</b></u></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="4"><p class="headertop">Access WebMail using web page on the left</p></td>
            </tr>
            <tr>
              <td style="width: 12.3107%; height: 21px; padding-left: 5px;"><b>Log into WebMail at:</b></td>
              <td style="width: 50%; height: 21px; padding-left: 5px;"><a href="#">http://mail.ctaxrelief.com</a></td>
            </tr>
            <tr>
              <td style="width: 20%; height: 23px; padding-left: 5px;"><b>Login:</b></td>
              <td style="width: 30%; height: 23px; padding-left: 5px;"><b>{{ $employee->email }}</b></td>
            </tr>
            <tr>
              <td style="width: 20%; height: 23px; padding-left: 5px;"><b>Password:</b></td>
              <td style="width: 30%; height: 23px; padding-left: 5px;"><b>This password is same as network password</b></td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px;" colspan="2"><b><u>Spark (CHAT) Configuration</u><b/></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="4"><p class="headertop">Note: Spark is our chat program. Please edit your profile in Spark to reflect your info</p></td>
            </tr>
            <tr>
              <td style="width: 12.3107%; height: 21px; padding-left: 5px;"><b>Username:</b></td>
              <td style="width: 50%; height: 21px; padding-left: 5px;"><b>{{ $employee->ext }}</b></td>
            </tr>
            <tr>
              <td style="width: 20%; height: 23px; padding-left: 5px;"><b>Password:</b></td>
              <td style="width: 30%; height: 23px; padding-left: 5px;"><b>5555</b></td>
            </tr>
            <tr>
              <td style="width: 20%; height: 23px; padding-left: 5px;"><b>Server:</b></td>
              <td style="width: 30%; height: 23px; padding-left: 5px;"><b>192.168.2.43</b></td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b><u>Hylafax Pro (FAX)</u><b/></td>
              <td style="width: 50%; padding-left: 5px; height: 23px;"><a href="#">http://faxes.ctaxrelief.com</a></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="3"><p class="headertop">Hylafax Pro is our inbound/outbound fax software</p></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b>Username:</b></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b>{{ $employee->network_account }}</b></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b>Password:</b></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b> {{ $employee->accounts->where('employee_id', $employee->id)->where('type_account', 'Hylafax')->first()->password }} &nbsp;&nbsp; (Please note the upper case "C")</b></td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b><u>Get Help (Computer)</u><b/></td>
              <td style="width: 50%; padding-left: 5px; height: 23px;"><a href="#">http://ctaxrelief.zendesk.com</a></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="3"><p class="headertop">Zendesk is our help desk website</p></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b>Username:</b></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b>Please create your own login & password</b></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b>OR email helpdesk@communitytax.com to generate a ticket</b></td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b><u>PhoneSystem</u><b/></td>
              <td style="width: 50%; padding-left: 5px; height: 23px;"><a href="#"> http://agents.phonesystem.ctaxrelief.com/agents</a></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="3"><p class="headertop">Phone System logon is only needed if joining a queue</p></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b>Username:</b></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b>{{ $employee->network_account }}</b></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b>Password:</b></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b>{{ $employee->accounts->where('employee_id', $employee->id)->where('type_account', 'PhoneSystem')->first()->password }}</b></td>
            </tr>
          </tbody>
        </table>

        <br/>

        <table cellpadding="-2" style="border:1px black solid; border-top: none; border-left: none; font-family:Arial, sans-serif;font-size:10px;">
          <tbody style="border-top:none; border-left: none;">
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"><b><u>Paylocity</u><b/></td>
              <td style="width: 50%; padding-left: 5px; height: 23px;"><a href="#">https://login.paylocity.com</a></td>
              <td style="border:1px black solid; width: 30%; padding-left: 5px;" rowspan="2"><p class="headertop">This is our time-clock website</p></td>
            </tr>
            <tr>
              <td style="width: 20%; padding-left: 5px; height: 23px;"></td>
              <td style="width: 30%; padding-left: 5px; height: 23px;"><b>You will receive an email from HR with instructions on registering</b></td>
            </tr>
          </tbody>
        </table>
      </body>
      </html>