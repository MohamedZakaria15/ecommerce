<div>
  <div class="container" style="padding: 30px 0;">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                 <div class="row">
                     <div class="col-md-6">
                         Add New Category
                     </div>
                     <div class="col-md-6">
                       <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All Category</a>
                     </div>
                 </div>
                </div>
                  <div class="panel-body">
                 <form class="form-horizontal">
                      <div class="form-group">
                         <label class="col-lg-4 control-label">Category Name</label>
                          <div class="col-md-4">
                              <input type="text" placeholder="Category Name" class="form-control input-md" />
                          </div>
                      </div>
                     <div class="form-group">
                         <label class="col-lg-4 control-label">Category Slug</label>
                         <div class="col-md-4">
                             <input type="text" placeholder="Category Name" class="form-control input-md" />
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="col-lg-4 control-label"></label>
                         <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                         </div>
                     </div>

                 </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
