package zaimzahro.bigproject.skin_diase.fragment

import android.os.Bundle
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Toast
import androidx.recyclerview.widget.LinearLayoutManager
import zaimzahro.bigproject.skin_diase.R
import zaimzahro.bigproject.skin_diase.adapter.AdapterProduk
import zaimzahro.bigproject.skin_diase.contract.ProductContract
import zaimzahro.bigproject.skin_diase.model.Produk
import zaimzahro.bigproject.skin_diase.presenter.ProductPresenter
import kotlinx.android.synthetic.main.fragment_home.view.*

class HomeFragment : Fragment(),ProductContract.View {
    private lateinit var presenter: ProductContract.Presenter
    lateinit var adapterProduk: AdapterProduk
    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {
        val view:View = inflater.inflate(R.layout.fragment_home,container,false)
        init(view)
        presenter = ProductPresenter(this)
        presenter?.getAllProduct()
        return view
    }

    fun init(view: View){

    }

    override fun attachToRecycler(listProduk: List<Produk>) {
        view?.rv_produk?.apply {
            adapterProduk = AdapterProduk(requireActivity(),listProduk)
            adapter = adapterProduk
            val linearLayoutManager = LinearLayoutManager(activity)
            linearLayoutManager.orientation = LinearLayoutManager.HORIZONTAL
            layoutManager = linearLayoutManager
        }
    }

    override fun emptydata(status: Boolean) {
        if (status){

        }else{

        }
    }

    override fun toast(message: String) {
        Toast.makeText(requireActivity(), message, Toast.LENGTH_SHORT).show()
    }

    override fun onResume() {
        super.onResume()
        presenter?.getAllProduct()
    }
}