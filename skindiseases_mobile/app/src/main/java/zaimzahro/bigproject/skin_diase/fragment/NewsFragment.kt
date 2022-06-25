package zaimzahro.bigproject.skin_diase.fragment

import android.os.Bundle
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import zaimzahro.bigproject.skin_diase.databinding.FragmentHospitalBinding

class NewsFragment : Fragment() {
    private lateinit var binding:FragmentHospitalBinding
    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {
        binding = FragmentHospitalBinding.inflate(layoutInflater,container,false)
        return binding.root
    }
}