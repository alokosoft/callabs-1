<link href="{{('css/frontend-css/accordion.css')}}" rel="stylesheet">

<div id="accordion" class="myaccordion" >
  <div class="card">
    <div class="card-header col-md-12" id="headingOne">
      
    <h2 class="mb-0">

        <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Liver Function Test(includes 11 tests)
          <span class="fa-stack fa-sm">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
          </span>
     
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li>Protein Total, Serum (includes 4 tests)</li>
          <li>Aspartate Aminotransferase</li>
          <li>Alkaline Phosphatase</li>
          <li>Gamma Glutamyl Transferase</li>
          <li>Bilirubin (Total, Direct and Indirect) (includes 3 tests)</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Kidney Function Test with Electrolytes(includes 6 tests)
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
          </span>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li>Creatinine</li>
          <li>Uric Acid</li>
          <li>Potassium</li>
          <li>Blood Urea Nitrogen (BUN)</li>
          <li>Chloride</li>
          <li>Sodium</li>
        </ul>
      </div>
    </div>
  </div>
  
</div>