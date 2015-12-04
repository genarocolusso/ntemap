  <?php 
          
          if($polos){ ?>
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                  <?php foreach ($polos as $key ) { ?>
                                              <tr>
                                                <td><?= $key['name']?></td>
                                                <td><?= $key['latitude']?></td>
                                                <td><?= $key['longitude']?></td>
                                                <td> - </td>
                                                 
                                            </tr>



                                 <?php  }

                                 ?>
                                        </tbody>
                                    </table> <?php } ?> 