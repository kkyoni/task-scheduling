Hello..
This mail contains Weekly report of your Team.
<style>
   table, th, td {
        border: 1px solid black;
   }
   table {
       width: 100%;
       border-collapse: collapse;
   }
</style>
<table >
   <thead>
   <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Email</th>
       <th>Monday</th>
       <th>Tuesday</th>
       <th>Wednesday</th>
       <th>Thursday</th>
       <th>Friday</th>
   </tr>
   </thead>
   <tbody>

   <tr>
       <td>{{$body->e_id}}</td>
       <td>{{$body->e_name}}</td>
       <td>{{$body->e_email}}</td>
       <td>{{$body->t_mon}}</td>
       <td>{{$body->t_tue}}</td>
       <td>{{$body->t_wed}}</td>
       <td>{{$body->t_thu}}</td>
       <td>{{$body->t_fri}}</td>
   </tr>
   </tbody>
</table>
