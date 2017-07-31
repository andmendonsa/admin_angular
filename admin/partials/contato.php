<div class="widget-box" id="recent-box" ng-controller="contactController">
	<div class="widget-header header-color-blue">
		<div class="row">
			<div class="col-sm-6">
				<h4 class="bigger lighter">
					<i class="glyphicon glyphicon-envelope"></i>&nbsp;
					Contato
				</h4>
			</div>
		</div>
	</div>
	<div class="widget-body ">
		<div class="contact">                                                                                 
			<div class="table-responsive">          
				<table class="table">
				    <thead>
				      <tr>
				        <th>Nome</th>
				        <th>Email</th>
				        <th>Telefone</th>
				        <th>Mensagem</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr ng-repeat="contact in contacts">
				        <td>{{contact.name}}</td>
				        <td>{{contact.email}}</td>
				        <td>{{contact.phone}}</td>
				        <td>{{contact.message}}</td>
				        <td><a ng-click="deleteContact(contact.id)"><i class="glyphicon glyphicon-trash"></i></a></td>
				      </tr>
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>