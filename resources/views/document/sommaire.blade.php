@extends('layouts.app', ['activePage' => 'document', 'titlePage' => __('Document')])
@section('content')
    <div class="content">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title ">Sommaire des documents</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('document') }}" class="btn btn-sm btn-warning">{{ __('Revenir en arriére') }}</a>
                                </div>
                            </div>
                            <?php
                            use App\Document;
                            $maxcols = 1;
                            $i = 0;

                            //Open the table and its first row
                            echo "<table>";
                            echo "<tr>";
                            $documents=Document::get();
                            foreach($documents as $document) {

                                if ($i == $maxcols) {
                                    $i = 0;
                                    echo "</tr><tr>";
                                }

                                echo "<td>$document->document</td>";

                                $i++;

                            }

                            //Add empty <td>'s to even up the amount of cells in a row:
                            while ($i <= $maxcols) {
                                echo "<td>&nbsp;</td>";
                                $i++;
                            }

                            //Close the table row and the table
                            echo "</tr>";
                            echo "</table>"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

